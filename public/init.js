$(document).ready(function() {

  $(document).on('click', '.delete-option', function() {
    $(this).parent(".input-g").remove();
  });

  $(document).on('click', '.add-option', function() {
    var txt = '<div class="input-group input-g">' +
      '<span style="float:right;"class="delete-option">Delete</span>' +
      '<input type="text" name="option_name[]" placeholder="Enter option">' +
      '<span class="input-group-addon button-click add-option">Add another option</span>' +
      '</div>';
    $(".form-g").append(txt);
  });

  $(document).on('change', '#question_type', function() {
    var selected_option = $('#question_type :selected').text();
    if (selected_option == "Radio Button" || selected_option == "Checkbox") {
      var txt = '<div class="input-group input-g">' +
        '<span class="delete-option">Delete</span>' +
        '<input type="text" name="option_name[]" placeholder="Enter option">' +
        '<span class="add-option">Add another option</span>' +
        '</div>';
      $(".form-g").html(txt);
    } else {
      $(".input-g").remove();
    }
  });
});
