window.onload = function(){


loadTable();

// Отправка данных формы, смена формы на блок

document.getElementById('messageForm').addEventListener('submit', function(evt){
  var http = new XMLHttpRequest(), f = this;
  evt.preventDefault();
  http.open("POST", "../php/form.php", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  http.send("userName=" + f.userName.value + "&email=" + f.email.value + "&homepage=" + f.homepage.value + "&userMessage=" + f.userMessage.value);
  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {


      var wrapper = document.getElementById('wrapper');
      var messageFormWrapper =  document.getElementById('messageFormWrapper');
      var successBlock = document.createElement('div');
      successBlock.innerHTML = 'Запись успешно добавлена!'
      successBlock.className = 'successBlock';
      wrapper.insertBefore(successBlock, messageFormWrapper);
      wrapper.replaceChild(successBlock, messageFormWrapper);
      setTimeout(function(){
        successBlock.style.display = 'none';
      }, 3000);
     
    	f.reset();   	
    }
  }
  http.onerror = function() {
    alert('Извините, данные не были переданы');
  }
}, false);



document.getElementById('getMore').addEventListener('click', loadTable, false);




function loadTable(){
  var http = new XMLHttpRequest(), f = this;
  //evt.preventDefault();
  http.open("POST", "../php/output.php", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  http.send("getMore=true");
  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {

      
      var tableContent = document.getElementById('tableBody');
      var tableRows = document.getElementById('getMore');
      var data = eval("("+http.responseText+")");
      

      data.forEach(function(item,i,data){
        var tr =  document.createElement('tr');
        tr.innerHTML = "<td>"+data[i].name+"</td>"+"<td>"+data[i].email+"</td>"+"<td>"+data[i].date+"</td>"+"<td>"+data[i].message+"</td>";
        tableContent.appendChild(tr);
      });
  
    }
  }
  http.onerror = function() {
    console.log('Извините, данные не были переданы');
  }
}




//loadTable2.http.onreadystatechange = function(){alert(5);};


};
