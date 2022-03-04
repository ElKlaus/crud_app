$(document).ready(function() {
  displayData();
});

// Display function
const displayData = function() {
  const displayData = "true"; //Поправить

  $.ajax({
    url: "php_modules/display.php",
    type: "post",
    data: {
      displaySend: displayData
    },
    success: function(data, status) {
      $('#displayDataTable').html(data);
    }
  });
};

// Add user
const addUser = function () {
  const nameAdd   = $('#completename').val(),
        emailAdd  = $('#completeemail').val(),
         mobileAdd = $('#completemobile').val(),
         placeAdd  = $('#completeplace').val();

  $.ajax({
    url: "php_modules/insert.php",
    type: "post",
    data: {
      nameSend: nameAdd,
      emailSend: emailAdd,
      mobileSend: mobileAdd,
      placeSend: placeAdd
    },
    success: function(data, status) {
      $('#completeModal').modal('hide');

      displayData();
    }
  });
};

// Delete record
const deleteUser = function(deleteId) {
  $.ajax({
    url: "php_modules/delete.php",
    type: "post",
    data: {
      deleteSend: deleteId,
    },
    success: function(data, status) {
      displayData();

    }
  });
};

// Update function
const getDetails = function(updateId) {
  $('#hiddendata').val(updateId);

  $.post("php_modules/update.php", {updateId: updateId}, function(data, status){
    const userId = JSON.parse(data);

    $('#updatename').val(userId.name);
    $('#updateemail').val(userId.email);
    $('#updatemobile').val(userId.mobile);
    $('#updateplace').val(userId.place);
  });

  $('#updateModal').modal("show");
};

// oncklick update event function
const updateDetails = function() {
  const updateName   = $('#updatename').val(),
        updateEmail  = $('#updateemail').val(),
        updateMobile = $('#updatemobile').val(),
        updatePlace  = $('#updateplace').val(),
        hiddenData	 = $('#hiddendata').val();

  $.post("php_modules/update.php", {
    updateName: updateName,
    updateEmail: updateEmail,
    updateMobile: updateMobile,
    updatePlace: updatePlace,
    hiddenData: hiddenData,
  }, function(data, status) {
    $('#updateModal').modal('hide');

    displayData();
  });
};