$(document).ready(function () {
  $(".booking_links p, .hosting_links p, .own_details p").on(
    "click",
    function () {
      $(".booking_links p, .hosting_links p, .own_details p").css({
        color: "",
        borderLeft: "",
        right: "0%",
        transition: "all 0.5s ease-in-out",
        "background-color": "transparent",
      });
      $(".active_slidebar_link").removeClass(
        " text-red-500 border-l-2 border-red-500"
      );
      $(this).css({
        color: "red",
        borderLeft: "2px solid red",
        position: "relative",
        right: "-5%",
        transition: "all 0.5s ease-in-out",
      });
    }
  );

  const slideHide = () => {
    $(".whichlist-box,.histroy-box,.review_box,.Dashboard_box,.hosting_box").hide();
    $(".slide-toggle i").toggleClass("fa-angle-down fa-angle-up");
  };
  $(".Dashboard").on("click", function () {
    slideHide();
    $(".Dashboard_box").show();
    $(".your-activity").text("Your activity : Booking");
  });

  $(".whichlist").on("click", function () {
    slideHide();
    $(".whichlist-box").show();
    $(".your-activity").text("Your activity : Whichlist");
  });
  $(".histroy").on("click", () => {
    slideHide();
    $(".your-activity").text("Your activity : Histroy");
    $(".histroy-box").show();
  });
  $(".review").on("click", () => {
    slideHide();
    $(".your-activity").text("Your activity : Reviews");
    $(".review_box").show();
  });
  $(".hosting,.newhosting").on("click", () => {
    slideHide();
    $(".your-activity").text("Your activity : Hosting");
    $(".hosting_box").show();
  });

  $(".slide-toggle").on("click", () => {
    $(".slide-toggle i").toggleClass("fa-angle-down fa-angle-up");
    $(".all-slide-link").slideToggle();
  });

  $(".alone,.all, .family, .place").on("click", function () {
    $(".alone,.all, .family, .place").css({
      color: "",
      borderBottom: "none",
    });
    $(".active_all").css({
      color: "gray",
    });
    $(this).css({
      color: "red",
      borderBottom: "2px solid red",
    });
  });




  $("#propertyImages").on("change", function () {
    var files = $(this).get(0).files;
    var preview = $("#imagePreview");
    preview.empty(); // Clear any previous images

    if (files) {
      $.each(files, function (index, file) {
        var reader = new FileReader();
        var fileIndex = index;

        reader.onload = function (e) {
          var imgWrapper = $('<div class="image-wrapper"></div>');
          var img = $("<img>").attr("src", e.target.result);
          var removeBtn = $('<button class="remove-btn">X</button>');

          imgWrapper.append(img).append(removeBtn);
          preview.append(imgWrapper);

          // Remove image on button click
          removeBtn.on("click", function () {
            imgWrapper.remove();
            // Remove the file from the input (for example purpose, this requires additional handling)
            var dataTransfer = new DataTransfer();
            $.each($("#propertyImages").get(0).files, function (i, file) {
              if (i !== fileIndex) {
                dataTransfer.items.add(file);
              }
            });
            $("#propertyImages").get(0).files = dataTransfer.files;
          });
        };

        reader.readAsDataURL(file);
      });
    }
  });
});
