
        //var e = document.getElementById("ClientName");
        //var strUser = e.options[e.selectedIndex].value;
        //var e1 = document.getElementById("locality-dropdown");
        //var Country = e1.options[e1.selectedIndex].value;
        var e2 = document.getElementById("select_service_type");
        var ser = e2.options[e2.selectedIndex].value;
        var dob2 = document.getElementById("Service Name");
        var dob = dob2.value;
        //var opt2 = document.getElementById("SLA");
        //var optt = opt2.value;
        //var e3 = document.getElementById("select_service_name");
        //var opt = e3.options[e3.selectedIndex].value;
 //Add        

function TestIT2(){
    ser = e2.options[e2.selectedIndex].value;
    dob = dob2.value;
        console.log("test it function 1");
        $.post("./API/createService.php",
    {
      Action : "Add",
      ServiceT: ser,
      servicename: dob      
    },
    function(data,status){
     //   $("#table").html(data);
   // document.getElementById("table").innerHTML = data;
    console.log("a"+data);
     //alert("Data: " + data + "\nStatus: " + status);
    });
   // T2();
   T3();
    }
/*function editRow(){
var db1 = $("#getv").val(); //$('#upd1').attr('onclick', 'editUpdate(1,'+db1+')');
editUpdate(1,db1);
}*/
    
function T3(){
    ser = e2.options[e2.selectedIndex].value;
    dob = dob2.value;

         $.post("./API/createService.php",
    {
       Action : "Display",
      ServiceT: ser,
      servicename: dob   
    },
    function(data,status){
        $("#table").html(data);
    document.getElementById("table").innerHTML = data;
    console.log("r"+data);
    //alert("Data: " + data + "\nStatus: " + status);
    });
}
function d1(id){
   
        $.post("./API/AddDocument.php",
    {
       service: id   
    },
    function(data,status){
     //   $("#table").html(data);
    //document.getElementById("table").innerHTML = data;
    console.log(" status :"+data);
    //T3();
    });  
}
function deleteRow(id){
        ser = e2.options[e2.selectedIndex].value;
    dob = dob2.value;
    var answer = window.confirm("Are you sure you want to delete this service?")
if (answer) {
        $.post("./API/createService.php",
    {
      Action: "delete",
      service: id,
      ServiceT: ser,
      servicename: dob      
    },
    function(data,status){
     //   $("#table").html(data);
    //document.getElementById("table").innerHTML = data;
    console.log("delete status :"+data);
    T3();
    });
}
else {
    T3();
}

     
}
function editUpdate(id,dbid){
var dat = [];
$('#tr'+id+' td').each(function(){
      var id = $(this).attr("id");
      console.log("id  :"+id);
      if (typeof id === 'undefined') {console.log(" undefined :"+id);}else{
           if(id=='cn'){dat[0]=$(this).html();} else if(id=='co'){dat[1]=$(this).html();}
           else if(id=='countryl'){//dat[2]=$(this).html();
             dat[2]= $("#locality-dropdown").val();
            }else if(id=='sn'){dat[3]=$(this).html();}
           else if(id=='sla'){dat[4]=$(this).html();}           
         }
    
});
  console.log("dat  :"+dat);
console.log("Select Edit :"+"#tr"+id+" td");
 var answer = window.confirm("Are you sure you want to save this data?")
if (answer) {
         $.post("./API/createService.php",
    {
      Action: "edit",
      id: dbid,
      Client: dat[0],
      Country: dat[1],
      ServiceT: dat[2],
      ServiceN: dat[3],
      Price: dat[4]       
    },
    function(data,status){
     //   $("#table").html(data);
    //document.getElementById("table").innerHTML = data;
    console.log("update status :"+data);
    //T3();
    });
}
else {
    T3();
}
/*
$('#tr'+id+' td').each(function(){
    $(this)
       // .attr("col", $(this).index() + 1),
       // .attr("row", $(this).parent().index() + 1);
       . removeAttr("contenteditable");
});
*/
}





