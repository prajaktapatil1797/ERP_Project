console.log('working')

const addClientSubmit = document.querySelector('#ajax button#add-client'),
  inputFields = document.querySelectorAll('#ajax input:not([type="radio"] )'),
  inputFieldsArray = [...inputFields],
  inputRadios = document.querySelectorAll('#ajax input[type="radio"]'),
  inputRadiosArray = [...inputRadios],
  inputCheckbox = document.querySelectorAll('#ajax input[type="checkbox"]'),
  inputCheckboxArray = [...inputCheckbox],
  select = document.querySelectorAll('#ajax select'),
  selectArray = [...select],
  inputCurrency = document.querySelector('#ajax select[name="currency"]')

  /* Get Country*/
  let dropdown = document.getElementById('locality-dropdown');
  dropdown.length = 0;
  
  let defaultOption = document.createElement('option');
  defaultOption.text = 'Select Country';
  defaultOption.value='0';

  dropdown.add(defaultOption);
  dropdown.selectedIndex = 0;
  
  const country = 'API/country.php';
  
  fetch(country)  
    .then(  
      function(response) {  
        if (response.status !== 200) {  
          console.warn('Looks like there was a problem. Status Code: ' + 
            response.status);  
          return;  
        }
  
        // Examine the text in the response  
        response.json().then(function(data) {  
          let option;
      
          for (let i = 0; i < data.length; i++) {
            option = document.createElement('option');
              option.text = data[i].country_name;
              option.value = data[i].id;
              dropdown.add(option);
          }    
        });  
      }  
    )  
    .catch(function(err) {  
      console.error('Fetch Error -', err);  
    });
  
    let servicetype = document.getElementById('select_state');
    servicetype.length = 0;
  
  let defaultservicetype = document.createElement('option');
  defaultservicetype.text = 'Select State';
  defaultservicetype.value="0";
  
  servicetype.add(defaultservicetype);
  servicetype.selectedIndex = 0;
  
  function getservice(x){
      const id={
          country_id:x,
      };
      fetch('./API/state.php',{
          method:'post',
          body:JSON.stringify(id),
          headers:{
              'Content-type':'application/json'
          }
      }).then(function(response){
          return response.text();
      }).then(function(text){
      //	console.log(text);
          
          let stat=JSON.parse(text);
          var wrap = document.getElementById('select_state')
          while(wrap.firstChild) wrap.removeChild(wrap.firstChild)
          let option;
      
          for (let i = 0; i < stat.length; i++) {
            option = document.createElement('option');
              option.text = stat[i].service_type;
              option.value = stat[i].id;
              servicetype.add(option);
          }
             
      }).catch(function(error){
          console.error(error);
      })
      
  }
  
  let servicename = document.getElementById('select_city');
  servicename.length = 0;
  
  let defaultservicename = document.createElement('option');
  defaultservicename.text = 'Select City';
  defaultservicename.value='0';
  
  servicename.add(defaultservicename);
  servicename.selectedIndex = 0;
  
  function getservicename(x){
      const id={
          service_type_id:x,
      };
      fetch('./API/cities.php',{
          method:'post',
          body:JSON.stringify(id),
          headers:{
              'Content-type':'application/json'
          }
      }).then(function(response){
          return response.text();
      }).then(function(text){
         // console.log(text);
          
          let stat=JSON.parse(text);
          var wrap = document.getElementById('select_city')
          while(wrap.firstChild) wrap.removeChild(wrap.firstChild)
          let option;
      
          for (let i = 0; i < stat.length; i++) {
            option = document.createElement('option');
              option.text = stat[i].service_name;
              option.value = stat[i].id;
              servicename.add(option);
          }
             
      }).catch(function(error){
          console.error(error);
      })
      
  }
  
let data = {}

const sendRequest = (url) => {
  fetch(url, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
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
        data[value.name] = value.value
      }
    }) : false
    inputRadiosArray ? inputRadiosArray.map((value) => {
      let checked = 0

      if (value.checked === true) {
        checked = 1
      }
      data[value.name] = checked
    }) : false
    inputCheckboxArray ? inputCheckboxArray.map((value) => {
      let checked = 0

      if (value.checked === true) {
        checked = 1
      }
      data[value.name] = checked
    }) : false
    selectArray ? selectArray.map(value => {
      data[value.name] = value.value
    }) : false
    inputCurrency ? data["currency"] = inputCurrency.value : false
    if (run === true) {
      sendRequest(url)
    }
    data = {}
  }
}

addClientSubmit && addClientSubmit.addEventListener('click', submit('API/addClient.php'))
console.log('working 2');

const modifyClientData = [{
    id: 1,
    "Client Name": "Sandip",
    "Client Code": "314879",
    "Client SPOC": "123874",
    "Country": "india",
    "State": "west bengal",
    "City": "howrah",
    "Zip Code": "711103",
    "Contact Number": "87770948",
    "Applicant Response Time": "0",
    "Invoice Address Details": "qpewu irqeuwon 1748",
    "Invoice Bank Detail": "1324809 ",
    "Invoice Payment Due Days": "1324897",
    "Invoice Code": "189471",
    "Is GSTIN": "8381gst",
    "Email ID": "sandip@gmail.com",
    "dateofbirth": "1998-10-05",
    "Is Package": 1,
    "Email ID radio" : 0,
    "Is LOB Mapping": 0,
    "currency": "Rupee"
  },
  {
    id: 2,
    "Client Name": "Rohan",
    "Client Code": "414879",
    "Client SPOC": "0123874",
    "Country": "india",
    "State": "Mumbai",
    "City": "south mumbai",
    "Zip Code": "7132",
    "Contact Number": "12345",
    "Applicant Response Time": "1",
    "Invoice Address Details": "qpewu irqeuwon 1748",
    "Invoice Bank Detail": "1324809 ",
    "Invoice Payment Due Days": "1324897",
    "Invoice Code": "189471",
    "Is GSTIN": "8381gst",
    "Email ID": "rohan@gmail.com",
    "dateofbirth": "1998-10-05",
    "Is Package": 0,
    "Email ID radio" : 0,
    "Is LOB Mapping": 0,
    "currency": "Rupee"
  },
  {
    id: 3,
    "Client Name": "john",
    "Client Code": "314879",
    "Client SPOC": "123874",
    "Country": "United States",
    "State": "LA",
    "City": "NY",
    "Zip Code": "14908",
    "Contact Number": "87770948",
    "Applicant Response Time": "0",
    "Invoice Address Details": "qpewu irqeuwon 1748",
    "Invoice Bank Detail": "1324809 ",
    "Invoice Payment Due Days": "1324897",
    "Invoice Code": "189471",
    "Is GSTIN": "8381gst",
    "Email ID": "john@gmail.com",
    "dateofbirth": "1998-10-05",
    "Is Package": 1,
    "Email ID radio" : 1,
    "Is LOB Mapping": 0,
    "currency": "USD"
  }
]

const clientCode = document.querySelector('#client-code'),
  inputState = document.querySelector('#inputState')
const getModifyClientData = (d) => {
  // debouncing
  let timer
  return e => {
    clearTimeout(timer)
    timer = setTimeout(() => {
      fetch('API/modifyClient.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            data: e.target.value
          }),
        })
        .then(response => response.json())
        .then(data => {
          modifyClientData = data
          updateModifyClientData()
          console.log('Success:', data);
        })
        .catch((error) => {
          console.error('Error:', error);
        });
    }, d)
  }
}

const tbody = document.querySelector('#table-body')

// live search
clientCode && clientCode.addEventListener('keyup', getModifyClientData(300))
inputState && inputState.addEventListener('keyup', getModifyClientData(300))
const updateModifyClientData = () => {
  modifyClientData.map((value) => {
    tbody ? tbody.innerHTML += `<tr>
    <td>
      ${value["Client Name"]}
    </td>
    <td>
      ${value["Client Code"]}
    </td>
    <td>
      ${value["Client SPOC"]}
    </td>
    <td>
      ${value["dateofbirth"]}
    </td>
    <td class="text-primary">
      <ul style="list-style: none;">
        <li class="nav-item dropdown">
          <a
            class="nav-link"
            href="javascript:;"
            id="navbarDropdownProfile"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              Account
            </p>
            <div class="ripple-container"></div
          ></a>
          <div
            class="dropdown-menu dropdown-menu-left"
            aria-labelledby="navbarDropdownProfile"
          >
            <a class="dropdown-item" href="#">View</a>
            <a class="dropdown-item block" href="#" id="${value.id}">Block</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a
              id="${value.id}"
              class="dropdown-item add-bank-details"
              href="./bankDetails.html"
              >Add bank details</a
            >
            <div class="dropdown-divider"></div>
            <a
              id="${value.id}"
              class="dropdown-item edit"
              href="./addClient.html"
              >Edit</a
            >
            <a class="dropdown-item" href="#">Delete</a>
          </div>
        </li>
      </ul>
    </td>
  </tr>` : false
  })
}
updateModifyClientData()

let clientEditInfo

// do things when clicked on action menu
tbody ? tbody.onclick = (e) => {
  if (e.target.classList.contains('add-bank-details')) {
    e.preventDefault()
    clientEditInfo = modifyClientData.find(client => client.id == e.target.id)
    localStorage.setItem("data", JSON.stringify(clientEditInfo))
    window.location.href = `bankDetails.html?id=${e.target.id}`
  }
  if (e.target.classList.contains("block")) {
    e.preventDefault()

    data = [{
      id: e.target.id
    }]

    if (e.target.innerHTML === "Unblock") {
      e.target.innerHTML = "Block"
      data[0].block = 0
    } else {
      e.target.innerHTML = "Unblock"
      data[0].block = 1
    }
    sendRequest("api/modifyClient.php")
  }
  if (e.target.classList.contains('edit')) {
    e.preventDefault()    
    clientEditInfo = modifyClientData.find(client => client.id == e.target.id)
    localStorage.setItem("data", JSON.stringify(clientEditInfo))
    window.location.href = `addClient.html?id=${e.target.id}`
  }
} : false

console.log('working 3');

// when add user go to addClient through edit
if (window.location.pathname === "/task/views/addClient.html") {
  var url = new URL(window.location.href);
  let id = url.searchParams.get('id')
  if (id) {
    clientEditInfo = JSON.parse(localStorage.getItem("data"))
    
    // automatic fill up input fields
    inputFieldsArray.map((inputField) => {
      inputField.value = clientEditInfo[inputField.name]
    })
    inputRadiosArray.map((inputRadio) => {
      inputRadio.checked = (clientEditInfo[inputRadio.name] == 1) ? true : false
    })
    inputCurrency.value = clientEditInfo[inputCurrency.name]
    addClientSubmit.innerHTML = "Update"
    data[id] = id
  }
}


const addBankDetails = document.querySelector('#ajax button#add-bank-details')
addBankDetails && addBankDetails.addEventListener('click', submit("api/addBankDetails.php"))

console.log("working 4");

console.log('working all');


  // const submitBankDetails = (e) => {
  //   e.preventDefault()
  
  //   let run = true
  //   inputFieldsArray.map((value) => {
  //     if (run === true) {
  //       if (value.value.trim().length == 0) {
  //         alert('all fields are required')
  //         run = false
  //       }
  //       // data.push({
  //       //   [value.name]: value.value
  //       // })
  //       data[value.name] = value.value
  //     }
  //   })
  //   if (run === true) {
  //     sendRequest('api/addBankDetails.php')
  //   }
  
  //   data = {}
  // }