console.log('working')
const clientCode = document.querySelector('#ClientCode'),
  inputState = document.querySelector('#inputState')

let modifyClientData

// live search
const getModifyClientData = (d) => {
  // debouncing
  let timer
  return e => {
    console.log('modifyClientData', modifyClientData)
    clearTimeout(timer)
    timer = setTimeout(() => {
      let lowerCaseClientCode = clientCode.value.toLowerCase()
      let lowerCaseClientName = inputState.value.toLowerCase()
      console.log('lowercase', lowerCaseClientCode, lowerCaseClientName)
      let newData
      newData = modifyClientData.filter(v => {
        let clientCodeMatch = v['Client_Code'].toLowerCase().search(lowerCaseClientCode) == 0 
        let clientNameMatch = v['Client_Name'].toLowerCase().search(lowerCaseClientName) == 0
        return clientCodeMatch && clientNameMatch
      })

      updateModifyClientData(newData)
    }, d)
  }
}

fetch('https://www.bgvhwd.xyz/Project_files/API/viewclient.php')
  .then(response => response.json())
  .then(data => {
    modifyClientData = data
    updateModifyClientData(modifyClientData)
    // console.log('Success:', data);
  })
  .catch((error) => {
    console.error('Error:', error);
  });

// getModifyClientData(0)
clientCode && clientCode.addEventListener('keyup', getModifyClientData(0))
inputState && inputState.addEventListener('keyup', getModifyClientData(0))

const tbody = document.querySelector('#table')

const updateModifyClientData = (d) => {
  tbody ? tbody.innerHTML = '' : false
  d.map((value, i) => {
    tbody ? tbody.innerHTML += `<tr>
    <td>
      ${i + 1}
    </td>
    <td>
      ${value["Client_Name"]}
    </td>
    <td>
      ${value["Client_Code"]}
    </td>
    <td>
      ${value["Client_SPOC"]}
    </td>
    <td>
      ${value["Live_DateDate"]}
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
// updateModifyClientData()

console.log('working all')