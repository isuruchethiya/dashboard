$(document).ready(function() {
    $("#userDropdownToggle").click(function() {
      $(".dropdown-content").toggle();
    });
  
    $(document).click(function(event) {
      var $target = $(event.target);
      if (!$target.closest(".dropdown-content").length && !$target.is("#userDropdownToggle")) {
        $(".dropdown-content").hide();
      }
    });
});

// function loadContent(file) {
//   $.ajax({
//     url: file,
//     dataType: 'html',
//     success: function(response) {
//       $('#main').html(response);
//     },
//     error: function(xhr, status, error) {
//       console.log('Error loading file: ' + error);
//     }
//   });
// }

// // Call the loadContent function with the file parameter when the page loads
// window.onload = function() {
//   loadContent('dashbord.php');
// };

$(".nav").click(function() {
  $("#mySidenav").css('width', '70px');
  $("#main").css('margin-left', '70px');
  $(".logo").css('visibility', 'hidden');
  $(".logo span").css('visibility', 'visible');
  $(".logo span").css('margin-left', '-10px');
  $(".icon-a").css('visibility', 'hidden');
  $(".icons").css('visibility', 'visible');
  $(".icons").css('margin-left', '-8px');
  $(".nav").css('display', 'none');
  $(".nav2").css('display', 'block');
});

$(".nav2").click(function() {
  $("#mySidenav").css('width', '300px');
  $("#main").css('margin-left', '300px');
  $(".logo").css('visibility', 'visible');
  $(".icon-a").css('visibility', 'visible');
  $(".icons").css('visibility', 'visible');
  $(".nav").css('display', 'block');
  $(".nav2").css('display', 'none');
});

function loadContent(contentUrl) {
  // Assuming the "dashboard" area is a div with id "dashboard"
  var dashboardArea = document.getElementById("dashboard");

  // Load the content using AJAX or fetch
  fetch(contentUrl)
    .then(function(response) {
      return response.text();
    })
    .then(function(content) {
      // Set the loaded content in the "dashboard" area
      dashboardArea.innerHTML = content;
    })
    .catch(function(error) {
      console.log("Error loading content:", error);
    });
}
function loadContent(contentUrl) {
  // Assuming the "dashboard" area is a div with id "dashboard"
  var dashboardArea = document.getElementById("branchMabegement");

  // Load the content using AJAX or fetch
  fetch(contentUrl)
    .then(function(response) {
      return response.text();
    })
    .then(function(content) {
      // Set the loaded content in the "dashboard" area
      dashboardArea.innerHTML = content;
    })
    .catch(function(error) {
      console.log("Error loading content:", error);
    });
}
