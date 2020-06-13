var e = document.getElementById("ClientName");
var strUser = e.options[e.selectedIndex].value;
var e1 = document.getElementById("locality-dropdown");
var Country = e1.options[e1.selectedIndex].value;
var e2 = document.getElementById("select_service_type");
var ser = e2.options[e2.selectedIndex].value;
var dob2 = document.getElementById("Price");
var dob = dob2.value;
var opt2 = document.getElementById("SLA");
var optt = opt2.value;
var e3 = document.getElementById("select_service_name");
var opt = e3.options[e3.selectedIndex].value;

function TestIT2(){
strUser = e.options[e.selectedIndex].value;
Country = e1.options[e1.selectedIndex].value;
ser = e2.options[e2.selectedIndex].value;
dob = dob2.value;
optt = opt2.value;
opt = e3.options[e3.selectedIndex].value;
console.log("test it function 1");
$.post("./API/assignService.php",
{
Client: strUser,
Country: Country,
ServiceT: ser,
ServiceN: opt,
Price: dob,
SLA:optt       
},
function(data,status){
//   $("#table").html(data);
// document.getElementById("table").innerHTML = data;
console.log("r"+data);
//  alert("Data: " + data + "\nStatus: " + status);
});
// T2();
T3();
}
function T2(){
console.log("test it function 2");
strUser = e.options[e.selectedIndex].value;
Country = e1.options[e1.selectedIndex].value;
ser = e2.options[e2.selectedIndex].value;
dob = dob2.value;
optt = opt2.value;
opt = e3.options[e3.selectedIndex].value;

 $.post("./API/assignServiceDisplay.php",
{
Client: strUser,
Country: Country,
ServiceT: ser,
ServiceN: opt,
Price: dob,
SLA:optt       
},
function(data,status){
document.getElementById("ClientName").innerHTML = data;
console.log("r"+data);
//alert("Data: " + data + "\nStatus: " + status);
});
}

function T3(){
console.log("test it function 2");
strUser = e.options[e.selectedIndex].value;
Country = e1.options[e1.selectedIndex].value;
ser = e2.options[e2.selectedIndex].value;
dob = dob2.value;
optt = opt2.value;
opt = e3.options[e3.selectedIndex].value;

 $.post("./API/assignServicetable.php",
{
Client: strUser,
Country: Country,
ServiceT: ser,
ServiceN: opt,
Price: dob,
SLA:optt       
},
function(data,status){
$("#table").html(data);
document.getElementById("table").innerHTML = data;
console.log("r"+data);
//alert("Data: " + data + "\nStatus: " + status);
});
}

function deleteRow(id){
console.log("test it delete"+id);
strUser = e.options[e.selectedIndex].value;
Country = e1.options[e1.selectedIndex].value;
ser = e2.options[e2.selectedIndex].value;
dob = dob2.value;
optt = opt2.value;
opt = e3.options[e3.selectedIndex].value;

 $.post("./API/assignServicetable.php",
{
action: "delete",
Client: id,
Country: Country,
ServiceT: ser,
ServiceN: opt,
Price: dob,
SLA:optt       
},
function(data,status){
//   $("#table").html(data);
//document.getElementById("table").innerHTML = data;
console.log("delete status :"+data);
T3();
});
}
function editRow(id,dbid){

 $.post("./API/modifyClient.php",
{
id: dbid,

},
function(data,status){

//console.log("update status :"+data);
window.location.href = "modifyClient.php";

});

}

console.log('working')

let data = {}

let clients
const clientName = document.querySelector('#ClientName')

fetch('API/viewclient.php')
.then(response => response.json())
.then(data => {
clients = data
//   console.log(countries)
clients.map(v => {
  // console.log(v.country_name)
  clientName.innerHTML += `<option value="${v.Client_Name}">${v.Client_Name}</option>`
})
});


let countries
const countrySelect = document.querySelector('#locality-dropdown')

fetch('API/country.php')
.then(response => response.json())
.then(data => {
countries = data
console.log(countries)
countries.map(v => {
  countrySelect.innerHTML += `<option value="${v.country_name}">${v.country_name}</option>`
})
});

const fetchService = (e) => {
console.log('change')
let countryName = e.target.value
// console.log(countryName)
// data['country_name'] = e.target.value
let countryCode = countries.find(v => countryName == v.country_name)
data['country_code'] = countryCode.country_code
}

countrySelect.onchange = (e) => fetchService(e)

console.log('working all')