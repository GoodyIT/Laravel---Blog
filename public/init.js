$(document).ready(function() {
  $('.collapsible').collapsible({
    accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
  });

  $(document).on('click', '.delete-option', function() {
    $(this).parent(".input-field").remove();
  });

  $(document).on('click', '.add-option', function() {
    var material = '<div class="input-field input-g col s12">' +
      '<input name="option_name[]" id="option_name[]" type="text">' +
      '<span style="float:right;"class="delete-option">Delete</span>' +
      '<label for="option_name">Options</label>' +
      '<span class="add-option">Add Another</span>' +
      '</div>';
    $(".form-g").append(material);
  });

  var material = '<div class="input-field col input-g s12">' +
    '<input name="option_name[]" id="option_name[]" type="text">' +
    '<span style="float:right;"class="delete-option">Delete</span>' +
    '<label for="option_name">Options</label>' +
    '<span class="add-option">Add Another</span>' +
    '</div>';
    
  $(document).on('change', '#question_type', function() {
    var selected_option = $('#question_type :selected').val();
    if (selected_option === "radio" || selected_option === "checkbox") {
      $(".form-g").html(material);
    } else {
      $(".input-g").remove();
    }
  });
});
