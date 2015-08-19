window.onload = function(){



document.getElementById('messageFormWrapper').style.display = "none";


// Отправка данных формы, смена формы на блок
var a = 0;
var b = 4;
loadTable(a,b);
getRows();



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



document.getElementById('getMore').addEventListener('click', function(){

  a += b;

  if (a>=22){
    document.getElementById('getMore').style.display = "none";
  }
  else{
    loadTable(a,b);
  }
  

}, false);




function loadTable(from, recordOnPage){

  var http = new XMLHttpRequest(), f = this;


  http.open("POST", "../php/output.php", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  http.send("getMore=true"+"&from="+from+"&recordOnPage="+recordOnPage);
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




function getRows(){

  var http = new XMLHttpRequest();
  http.open("POST", "../php/output.php", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  http.send("getRows=true");
  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {
       var maxRows = eval("("+http.responseText+")");
       console.log(maxRows);
    }
  }

  http.onerror = function() {
    console.log('Извините, данные не были переданы');
  }

}


//getRows();
//loadTable2.http.onreadystatechange = function(){alert(5);};


};
