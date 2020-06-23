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

function TestIT2() {
  strUser = e.options[e.selectedIndex].value;
  Country = e1.options[e1.selectedIndex].value;
  ser = e2.options[e2.selectedIndex].value;
  dob = dob2.value;
  optt = opt2.value;
  opt = e3.options[e3.selectedIndex].value;
  console.log("test it function 1");
  $.post("API/assignService.php", {
      Client: strUser,
      Country: Country,
      ServiceT: ser,
      ServiceN: opt,
      Price: dob,
      SLA: optt
    },
    function (data, status) {
      //   $("#table").html(data);
      // document.getElementById("table").innerHTML = data;
      console.log("r" + data);
      //  alert("Data: " + data + "\nStatus: " + status);
    });
  // T2();
  T3();
}

function T2() {
  console.log("test it function 2");
  strUser = e.options[e.selectedIndex].value;
  Country = e1.options[e1.selectedIndex].value;
  ser = e2.options[e2.selectedIndex].value;
  dob = dob2.value;
  optt = opt2.value;
  opt = e3.options[e3.selectedIndex].value;

  $.post("API/assignServiceDisplay.php", {
      Client: strUser,
      Country: Country,
      ServiceT: ser,
      ServiceN: opt,
      Price: dob,
      SLA: optt
    },
    function (data, status) {
      // document.getElementById("ClientName").innerHTML = data;
      // console.log("r" + data);
      //alert("Data: " + data + "\nStatus: " + status);
    });
}

function T3() {
  console.log("test it function 2");
  strUser = e.options[e.selectedIndex].value;
  Country = e1.options[e1.selectedIndex].value;
  ser = e2.options[e2.selectedIndex].value;
  dob = dob2.value;
  optt = opt2.value;
  opt = e3.options[e3.selectedIndex].value;

  $.post("API/assignServicetable.php", {
      Client: strUser,
      Country: Country,
      ServiceT: ser,
      ServiceN: opt,
      Price: dob,
      SLA: optt
    },
    function (data, status) {
      $("#table").html(data);
      document.getElementById("table").innerHTML = data;
      console.log("r" + data);
      //alert("Data: " + data + "\nStatus: " + status);
    });
}

function deleteRow(id) {
  console.log("test it delete" + id);
  strUser = e.options[e.selectedIndex].value;
  Country = e1.options[e1.selectedIndex].value;
  ser = e2.options[e2.selectedIndex].value;
  dob = dob2.value;
  optt = opt2.value;
  opt = e3.options[e3.selectedIndex].value;

  $.post("API/assignServicetable.php", {
      action: "delete",
      Client: id,
      Country: Country,
      ServiceT: ser,
      ServiceN: opt,
      Price: dob,
      SLA: optt
    },
    function (data, status) {
      //   $("#table").html(data);
      //document.getElementById("table").innerHTML = data;
      console.log("delete status :" + data);
      T3();
    });
}

function editRow(id, dbid) {

  $.post("API/modifyClient.php", {
      id: dbid,

    },
    function (data, status) {

      //console.log("update status :"+data);
      window.location.href = "modifyClient.php";

    });

}

console.log('working')

let data = {}

let clients
const clientName = document.querySelector('#ClientName')

fetch('https://www.bgvhwd.xyz/Project_files/API/viewclient.php')
.then(response => response.json())
.then(data => {
  clients = data
  // console.log('clients', clients)
    clients.map(v => {
      // code change
      console.log(v.Id)
      clientName.innerHTML += `<option value="${v.Id}" class="bg-secondary text-light" > g ${v.Client_Name}</option>`
    })
  });

// clientName.onchange = (e) => fetchService(e)


let countries
const countrySelect = document.querySelector('#locality-dropdown')

fetch('https://www.bgvhwd.xyz/Project_files/API/country.php')
  .then(response => response.json())
  .then(data => {
    countries = data
    console.log('countries', countries)
    countries.map(v => {
      countrySelect.innerHTML += `<option value="${v.id}">${v.country_name}</option>`
    })
  });

let serviceType

const fetchService = (e) => {
  data['country_id'] = e.target.value

  fetch("https://www.bgvhwd.xyz/Project_files/API/servicetype.php", {
      method: 'POST',
      // body: JSON.stringify({"country_id": '101'}),
      body: JSON.stringify({
        "country_id": data['country_id']
      }),
    })
    .then(response => response.json())
    .then(data => {
      serviceType = data
      setServiceType()
    })
    .catch((error) => {
      console.error('Error:', error);
    });

}

let serviceName

const fetchServiceName = (e) => {
  console.log('fetch service name')
  data['service_type_id'] = e.target.value
  console.log(data['service_type_id'])

  fetch("https://www.bgvhwd.xyz/Project_files/API/servicename.php", {
      method: 'POST',
      body: JSON.stringify({
        "service_type_id": data['service_type_id']
      })
    })
    .then(response => response.json())
    .then(data => {
      serviceName = data
      console.log('service names', serviceName)
      setServiceName()
    })
    .catch((error) => {
      console.error('Error:', error);
    });

}

const serviceTypeSelect = document.querySelector("#select_service_type"),
  serviceNameSelect = document.querySelector("#select_service_name")

const setServiceType = () => {
  console.log('serviceType', serviceType)
  serviceNameSelect.innerHTML = `<option selected="" class="bg-secondary text-light">Choose...</option>`
  serviceTypeSelect.innerHTML = `<option selected="" class="bg-secondary text-light">Choose...</option>`
  serviceType.map(v => {
    serviceTypeSelect.innerHTML += `<option value="${v.id}">${v.service_type}</option>`
  })
}

const setServiceName = () => {
  serviceNameSelect.innerHTML = `<option selected="" class="bg-secondary text-light">Choose...</option>`
  serviceName.map(v => {
    serviceNameSelect.innerHTML += `<option value="${v.id}">${v.service_name}</option>`
  })
}

countrySelect.onchange = (e) => fetchService(e)


serviceTypeSelect.onchange = (e) => fetchServiceName(e)


const assignSubmit = document.querySelector('#ajax button#assignSubmit'),
  inputFields = document.querySelectorAll('#ajax input:not([type="radio"] )'),
  inputFieldsArray = [...inputFields],
  inputRadios = document.querySelectorAll('#ajax input[type="radio"]'),
  inputRadiosArray = [...inputRadios],
  inputCheckbox = document.querySelectorAll('#ajax input[type="checkbox"]'),
  inputCheckboxArray = [...inputCheckbox],
  select = document.querySelectorAll('#ajax select'),
  selectArray = [...select],
  inputCurrency = document.querySelector('#ajax select[name="currency"]')

let jsonData = {}

const sendRequest = (url) => {
  fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(jsonData),
    })
    .then(response => response.json())
    .then(data => {
      console.log('Success:', data);
    })
    .catch((error) => {
      console.error('Error:', error);
    });
}

const submit = (url) => {
  return e => {
    e.preventDefault()
    let run = true
    inputFieldsArray ? inputFieldsArray.map((value) => {
      if (run === true) {
        if (value.value.trim().length == 0) {
          console.log(value)
          alert('all fields are required')
          run = false
        }
        jsonData[value.name] = value.value
      }
    }) : false
    inputRadiosArray ? inputRadiosArray.map((value) => {
      let checked = 0

      if (value.checked === true) {
        checked = 1
      }
      jsonData[value.name] = checked
    }) : false
    inputCheckboxArray ? inputCheckboxArray.map((value) => {
      let checked = 0

      if (value.checked === true) {
        checked = 1
      }
      jsonData[value.name] = checked
    }) : false
    selectArray ? selectArray.map(value => {
      jsonData[value.name] = value.value
    }) : false
    inputCurrency ? data["currency"] = inputCurrency.value : false
    if (run === true) {
      console.log(jsonData)
      sendRequest(url)
    }
    jsonData = {}
  }
}

assignSubmit && assignSubmit.addEventListener('click', submit('API/assignService.php'))

console.log('working all')