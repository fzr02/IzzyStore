function openPopup(itemTitle) {
    document.getElementById('popupTitle').innerText = itemTitle;
    document.getElementById('overlay').style.display = 'flex';
  }

  function closePopup() {
    document.getElementById('overlay').style.display = 'none';
  }

  function placeOrder() {
    openSuccessPopup();
  }

  function openSuccessPopup() {
    var successPopup = document.getElementById('successPopup');
    successPopup.style.display = 'block';
  }

  function closePopup() {
    var successPopup = document.getElementById('successPopup');
    successPopup.style.display = 'none';
  }
  function redirectToWhatsApp() {
    window.location.href = "https://wa.me/6289519086370"; 
  }

  function toggleSelection(element, pesananValue) {
    // Deselect all items
    var items = document.getElementsByClassName("item");
    for (var i = 0; i < items.length; i++) {
      items[i].classList.remove("selected");
    }
  
    // Select the clicked item
    element.classList.add("selected");
  
    // Set the value of the radio button
    var pesananInput = document.getElementById("pesanan");
    pesananInput.value = pesananValue;
  }
  

  function toggleSelection(element, payment_optionValue) {
    // Deselect all items
    var items = document.getElementsByClassName("payment_option");
    for (var i = 0; i < items.length; i++) {
      items[i].classList.remove("selected");
    }
  
    // Select the clicked item
    element.classList.add("selected");
  
    // Set the value of the radio button
    var payment_optionInput = document.getElementById("payment_option");
    payment_optionInput.value = payment_optionValue;
  }

  
  const searchInput = document.getElementById('searchInput');
  const searchResults = document.getElementById('searchResults');

  searchInput.addEventListener('input', function() {
    const searchTerm = searchInput.value.toLowerCase();
    const matchingGames = games.filter(game => game.toLowerCase().includes(searchTerm));

    
    displaySearchResults(matchingGames);
  });

  function displaySearchResults(results) {
    searchResults.innerHTML = ''; 

    results.forEach(result => {
      const resultItem = document.createElement('div');
      resultItem.textContent = result;
      searchResults.appendChild(resultItem);
    });
  }


  document.getElementById('topupForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the default form submission

    // Your existing AJAX request for form submission
    // ...

    // Assuming the responseText contains the response from your PHP script
    if (xhr.responseText.trim() === 'success') {
        showSuccessPopup(); // Call your existing function to show the success popup
    }
});

function showSuccessPopup() {
    // Show the success popup
    document.getElementById('successPopup').style.display = 'block';

    // Prevent the form from submitting in the traditional way
    return false;
}

  

function closePopup() {
  var popup = document.getElementById('successPopup');
  popup.style.display = 'none';
}

function redirectToWhatsApp() {
  // Logika pengalihan ke WhatsApp
  alert('Redirect to WhatsApp');
}

  
  

  

  

