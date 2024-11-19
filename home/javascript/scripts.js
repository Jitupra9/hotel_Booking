$(document).ready(function () {
  $(".filter").hide();
  const bookDetails = {
    searchplace: null,
    checkIN: null,
    checkout: null,
    mounthCount: null,
    longStay: null,
    monthGo: null,
    adultsCount: null,
    cheildrenCount: null,
    infants: null,
    pets: null,
  };

  const filteration = {
    filter: 1,
    typePlace: null,
    minPrise: null,
    maxPrise: null,
    badroom: null,
    beds: null,
    bathrom: null,
    propertyType: null,
    wifi: false,
    kitchen: false,
    washingMachine: false,
    dryer: false,
    english: false,
    hindi: false,
    odia: false,
  };
    const sectionActive = {
    mapBox: false,
    checkIn: false,
    checkOut: false,
    addGuest: false,
    addDates: false,
  };
  $(window).on("scroll", function () {
    $(".catogories_filter").css({
      "box-shadow": "0px 10px 15px -5px rgba(128, 128, 128, 0.792)",
    });
  });
  $(".catogories_filter,.top_header,.all_rooms").click(function (e) {

    $(".guest_box,.calander_box,.map_box").slideUp();
    sectionActive.mapBox = false;
    sectionActive.addGuest = false;
    sectionActive.checkIn = false;
    sectionActive.checkOut = false;
    sectionActive.addDates = false;
    $(
      ".open_map_box,.open_calander_box,.open_guest_box,.open_add_dates"
    ).removeClass("bg-gray-100");
    $(
      ".inner_open_map_box,.inner_open_guest_box,.inner_open_add_dates,.inner_open_checkout,.inner_open_checkin"
    ).removeClass(" bg-white  rounded-full shadow-lg shadow-gray-600");
  });

  var lastScrollTop = 0;
  var isScrollingUp = false;

  $(window).scroll(function () {
    var st = $(this).scrollTop();
    if (st > lastScrollTop) {
      isScrollingUp = false;
    } else {
      isScrollingUp = true;
    }

    if (isScrollingUp) {
      if (st === 0) {
        $(".mini_box").hide();
     
        $(".desktop_secreen_content").show();
        $(".catogories_filter").css({
          "box-shadow": "none",
        });
      } else {
        $(".sectioncontent").show();
      }
    } else {
      $(".catogories_filter").css({
        "box-shadow": "0px 10px 10px -3px rgba(128, 128, 128, 0.492)",
      });
      $(".mini_box").show();
   
      $(".sectioncontent").hide();
      $(".guest_box,.calander_box,.map_box").slideUp();
      sectionActive.mapBox = false;
      sectionActive.addGuest = false;
      sectionActive.checkIn = false;
      sectionActive.checkOut = false;
      sectionActive.addDates = false;
      $(".desktop_secreen_content").hide();
      $(
        ".open_map_box,.open_calander_box,.open_guest_box,.open_add_dates"
      ).removeClass("bg-gray-100");
      $(
        ".inner_open_map_box,.inner_open_guest_box,.inner_open_add_date,.inner_open_checkout,.inner_open_checkin"
      ).removeClass("bg-white rounded-full shadow-lg shadow-gray-600");
    }

    lastScrollTop = st;
  });

  $(".mini_box").click(function (e) {
    $(".mini_box").hide();
    $(".desktop_secreen_content").slideDown();
    $(".anywhere,.anyweek,.addguests").removeClass("bg-gray-200");
  });

  $("#toggle-icon").click(function () {
    $(this).toggleClass("fa-toggle-on text-black fa-toggle-off text-gray-400");
  });

  $(".experiences").on("click", function () {
    $(this).css({
      color: "black",
    });
    $(".stay").css({
      color: "gray",
    });
    $(
      ".pet_div,.months_container,.Flexible_container,.open_calander_box ,.select_date"
    ).addClass("hidden");
    $(".calendar-container").show();
    $(".open_add_dates").removeClass("hidden");
  });

  $(".stay").on("click", function () {
    $(this).css({
      color: "black",
    });
    $(".experiences").css({
      color: "gray",
    });
    $(".select_date,.pet_div,.open_calander_box ").removeClass("hidden");
    $(".open_add_dates").addClass("hidden");
  });



  $(".open-slide-bar").on("click", function () {
    $(".account-slide-bar").slideToggle();
  });

  $(".open_map_box").click(function (e) {

    $(".guest_box,.calander_box").slideUp();
    $(
      ".inner_open_add_date,.inner_open_map_box,.inner_open_guest_box,.inner_open_checkout,.inner_open_checkin"
    ).removeClass(" bg-white  rounded-full shadow-lg shadow-gray-600");

    $(".inner_open_map_box").addClass(
      " bg-white  rounded-full shadow-lg shadow-gray-600"
    );
    $(
      ".open_map_box,.open_calander_box,.open_guest_box,.open_add_dates"
    ).addClass("bg-gray-100");
    $(".map_box").slideToggle();
    if (sectionActive.mapBox == true) {
      $(
        ".open_map_box,.open_calander_box,.open_guest_box,.open_add_dates"
      ).removeClass("bg-gray-100");
      $(".inner_open_map_box").removeClass(
        " bg-white  rounded-full shadow-lg shadow-gray-600"
      );
      sectionActive.mapBox = false;
    } else {
      sectionActive.mapBox = true;
      sectionActive.checkIn =
        sectionActive.checkOut =
        sectionActive.addGuest =
        sectionActive.addDates =
          false;
    }
  });

  $(".open_calander_box").click(function (e) {
    $(".map_box").slideUp();
    $(".guest_box").slideUp();

    $(
      ".inner_open_map_box,.inner_open_guest_box,.inner_open_checkout,.inner_open_checkin"
    ).removeClass(" bg-white  rounded-full shadow-lg shadow-gray-600");

    $(".open_map_box,.open_calander_box,.open_guest_box").addClass(
      "bg-gray-100"
    );

    $(".calander_box").slideToggle();
  });
  $(".open_checkin").click(function () {
    
    $(".inner_open_checkin").addClass(
      " bg-white  rounded-full shadow-lg shadow-gray-600"
    );



    if (sectionActive.checkIn == true) {
      $(
        ".open_map_box,.open_calander_box,.open_guest_box,.open_add_dates"
      ).removeClass("bg-gray-100");
      $(".inner_open_checkin").removeClass(
        " bg-white  rounded-full shadow-lg shadow-gray-600"
      );
      sectionActive.mapBox = false;
    } else {
      sectionActive.checkIn = true;
      sectionActive.mapBox =
        sectionActive.checkOut =
        sectionActive.addGuest =
        sectionActive.addDates =
          false;
    }







  });
  $(".open_checkout").click(function () {
    $(".inner_open_checkout").addClass(
      " bg-white  rounded-full shadow-lg shadow-gray-600"
    );
    if (sectionActive.checkOut == true) {
      $(
        ".open_map_box,.open_calander_box,.open_guest_box,.open_add_dates"
      ).removeClass("bg-gray-100");
      $(".inner_open_checkin").removeClass(
        " bg-white  rounded-full shadow-lg shadow-gray-600"
      );
      sectionActive.mapBox = false;
    } else {
      sectionActive.checkOut = true;
      sectionActive.mapBox =
        sectionActive.checkIn =
        sectionActive.addGuest =
        sectionActive.addDates =
          false;
    }
  });

  $(".open_guest_box").click(function (e) {

    $(".map_box").slideUp();
    $(".calander_box").slideUp();
    $(
      ".inner_open_add_date,.inner_open_map_box,.inner_open_guest_box,.inner_open_checkout,.inner_open_checkin"
    ).removeClass(" bg-white  rounded-full shadow-lg shadow-gray-600");
    $(
      ".open_map_box,.open_calander_box,.open_guest_box,.open_add_dates"
    ).addClass("bg-gray-100");
    $(".inner_open_guest_box").addClass(
      " bg-white  rounded-full shadow-lg shadow-gray-600"
    );
    $(".guest_box").slideToggle();
    if (sectionActive.addGuest == true) {
      $(
        ".open_map_box,.open_calander_box,.open_guest_box,.open_add_dates"
      ).removeClass("bg-gray-100");
      $(".inner_open_guest_box").removeClass(
        " bg-white  rounded-full shadow-lg shadow-gray-600"
      );
      sectionActive.addGuest = false;
    } else {
      sectionActive.addGuest = true;
      sectionActive.mapBox = sectionActive.addDates = false;
    }
  });
  $(".open_add_dates").click(function () {
    $(".map_box").slideUp();
    $(".guest_box").slideUp();
    $(
      ".inner_open_add_date,.inner_open_map_box,.inner_open_guest_box,.inner_open_checkout,.inner_open_checkin"
    ).removeClass(" bg-white  rounded-full shadow-lg shadow-gray-600");
    $(".open_map_box,.open_guest_box,.open_add_dates").addClass("bg-gray-100");
    $(".inner_open_add_date").addClass(
      " bg-white  rounded-full shadow-lg shadow-gray-600"
    );
    $(".calander_box").slideToggle();
    if (sectionActive.addDates == true) {
      $(
        ".open_map_box,.open_calander_box,.open_guest_box,.open_add_dates"
      ).removeClass("bg-gray-100");
      $(
        ".inner_open_map_box,.inner_open_guest_box,.inner_open_add_date"
      ).removeClass(" bg-white  rounded-full shadow-lg shadow-gray-600");
      sectionActive.addDates = false;
    } else {
      sectionActive.addDates = true;
      sectionActive.mapBox = sectionActive.addGuest = false;
    }
  });

  function updateDates() {
    let currentDate = new Date();
    let nextMonthFirstDate = new Date(
      currentDate.getFullYear(),
      currentDate.getMonth() + 1,
      1
    );
    let monthCount = parseInt($(".month_count").text());
    let endDate = new Date(nextMonthFirstDate);
    endDate.setMonth(endDate.getMonth() + monthCount);
    let options = { weekday: "short", month: "short", day: "numeric" };
    let formattedStartDate = nextMonthFirstDate.toLocaleDateString(
      "en-US",
      options
    );
    let startParts = formattedStartDate.split(" ");
    let finalFormattedStartDate = `${startParts[0]} ${startParts[1]} ${startParts[2]}`;
    $(".start_month").text(finalFormattedStartDate);
    let formattedEndDate = endDate.toLocaleDateString("en-US", options);
    let endParts = formattedEndDate.split(" ");
    let finalFormattedEndDate = `${endParts[0]} ${endParts[1]} ${endParts[2]}`;
    $(".end_month").text(finalFormattedEndDate);
  }

  $(".month_increment").click(function (e) {
    e.preventDefault();
    var count = parseInt($(".month_count").text());
    count = count + 1;
    $(".month_count").text(count);
    updateDates();
  });

  $(".month_decrement").click(function (e) {
    e.preventDefault();
    var count = parseInt($(".month_count").text());
    if (count > 1) {
      count = count - 1;
    }
    $(".month_count").text(count);
    updateDates();
  });
  updateDates();

  $(".travel_fillup").on("click", function () {
    $(".header").slideUp();

    $(".travel_info").slideDown();
  });
  $(".offtravel_info").on("click", function () {
    $(".travel_info").slideUp();
    $(".header").slideDown();
  });

  $(".date_div").children().addClass("hidden");
  $(".total_guest").children().addClass("hidden");

  $(".date_div").click(function () {
    if ($(this).children().is(":hidden")) {
      $(this).children().slideDown();
      $(".addres_div,.total_guest").children().slideUp();
      $(".date_append_child").remove();
      $(".total_guest").append(guest_element);
      $(".addres_div").append(place_element);
      reset_con_change();
    }
  });

  function reset_con_change_two() {
    $(".reset_p").html("Clear all");
    $(".reset_p").removeClass("skip");
    $(".reset_btn").html("Search").css({
      "background-color": "red",
    });
  }

  function reset_con_change() {
    $(".reset_p").html("<u class='skip'>skip</u>");
    $(".reset_p").addClass("skip");
    $(".reset_btn").html("Next").css({
      "background-color": "black",
    });
  }
  $(document).on("click", ".skip", function (e) {
    $(".date_div").children().slideUp();
    $(".date_div").append(date_element);
    $(".total_guest").children().slideDown();
    $(".guest_append_child").remove();
    reset_con_change_two();
  });

  $(".total_guest").click(function () {
    if ($(this).children().is(":hidden")) {
      $(this).children().slideDown();
      $(".addres_div, .date_div").children().slideUp();
      $(".guest_append_child").remove();
      $(".date_div").append(date_element);
      $(".addres_div").append(place_element);
      reset_con_change_two();
    }
  });

  $(".addres_div").click(function () {
    if ($(this).children().is(":hidden")) {
      $(this).children().slideDown();
      $(".date_div ,.total_guest").children().slideUp();
      $(".place_append_child").remove();
      $(".date_div").append(date_element);
      $(".total_guest").append(guest_element);
      reset_con_change_two();
    }
  });

  $(document).ready(function () {
    var guest_count = {
      adults: 0,
      children: 0,
      infants: 0,
      pets: 0,
    };

    function updateCounts() {
      $(".count_adults, .guest_adults").text(guest_count.adults);
      $(".adultcount,.adultcounts").val(guest_count.adults);
      $(".count_children, .guest_children").text(guest_count.children);
      $(".ChildrenCount,.childcounts").val(guest_count.children);
      $(".count_infants, .guest_infants").text(guest_count.infants);
      $(".infantsCount,.infantcounts").val(guest_count.infants);
      $(".count_pets, .guest_pets").text(guest_count.pets);
      $(".petsCount,.petcounts").val(guest_count.pets);
    }
    $(".increment_adults, #increment_adults").on("click", function () {
      guest_count.adults += 1;
      updateCounts();
    });

    $(".decrement_adults, #decrement_adults").on("click", function () {
      if (guest_count.adults > 0) {
        guest_count.adults -= 1;
        updateCounts();
      }
    });

    $(".increment_children, #increment_children").on("click", function () {
      guest_count.children += 1;
      updateCounts();
    });

    $(".decrement_children, #decrement_children").on("click", function () {
      if (guest_count.children > 0) {
        guest_count.children -= 1;
        updateCounts();
      }
    });
    $(".increment_infants, #increment_infants").on("click", function () {
      guest_count.infants += 1;
      updateCounts();
    });

    $(".decrement_infants, #decrement_infants").on("click", function () {
      if (guest_count.infants > 0) {
        guest_count.infants -= 1;
        updateCounts();
      }
    });
    $(".increment_pets, #increment_pets").on("click", function () {
      guest_count.pets += 1;
      updateCounts();
    });

    $(".decrement_pets, #decrement_pets").on("click", function () {
      if (guest_count.pets > 0) {
        guest_count.pets -= 1;
        updateCounts();
      }
    });
  });

  var place_element =
    '<div class="place_append_child flex item-center justify-between font-semibold"><p class="text-gray-500">Where</p><p class="text-gray-800">im flexible</p></div>';
  var date_element =
    '<div class="date_append_child flex item-center justify-between font-semibold"><p class="text-gray-500">When</p><p class="text-gray-800">Add dates</p></div>';
  var guest_element =
    '<div class="guest_append_child flex item-center justify-between font-semibold"><p class="text-gray-500">Who</p><p class="text-gray-800">Add guests</p></div>';
  $(".date_div").append(date_element);
  $(".total_guest").append(guest_element);

  $(".dates").click(function () {
    $(this).css({
      "background-color": "white",
    });
    $(".flexible").css({
      "background-color": "transparent",
    });
    $(".months").css({
      "background-color": "transparent",
    });
    $(".calendar-container").show();
    $(".Flexible_container").addClass("hidden");
    $(".months_container").addClass("hidden");
  });
  $(".months").click(function () {
    $(this).css({
      "background-color": "white",
    });
    $(".flexible").css({
      "background-color": "transparent",
    });
    $(".dates").css({ "background-color": "transparent" });
    $(".calendar-container").hide();
    $(".Flexible_container").addClass("hidden");
    $(".months_container").removeClass("hidden");
  });
  $(".flexible").click(function () {
    $(this).css({
      "background-color": "white",
    });
    $(".dates").css({
      "background-color": "transparent",
    });
    $(".months").css({
      "background-color": "transparent",
    });
    $(".calendar-container").hide();
    $(".months_container").addClass("hidden");
    $(".Flexible_container").removeClass("hidden");
  });

  $(".week, .weekend, .month").click(function () {
    $(".week, .weekend, .month").css({
      "background-color": "",
      color: "",
    });
    $(".weekend").css({
      "background-color": "white",
      color: "gray",
    });

    $(this).css({
      "background-color": "black",
      color: "white",
    });
  });

  $(".filterOpen").click(function () {
    $(".filter").slideDown();
  });
  $(".offFilter").on("click", function () {
    $(".filter").slideUp();
  });

  function handleClick(selector) {
    $(selector).click(function () {
      $(this).css({
        "background-color": "black",
        color: "white",
      });

      if (selector === ".type-room") {
        filteration.typePlace = "room";
      } else if (selector === ".entier-home") {
        filteration.typePlace = "home";
      } else if (selector === ".any-type") {
        filteration.typePlace = "any";
      }
      $("#type_place").val(filteration.typePlace);
      $(`.entier-home, .type-room, .any-type`).not(selector).css({
        "background-color": "transparent",
        color: "black",
      });
    });
  }

  handleClick(".entier-home");
  handleClick(".type-room");
  handleClick(".any-type");

  const handleInput = () => {
    const minPrise = $(".min_val").val();
    const maxPrise = $(".max_val").val();
    filteration.minPrise = minPrise ? Math.max(minPrise, 500) : 500;
    filteration.maxPrise = maxPrise > filteration.minPrise ? maxPrise : 7000;
    $("#minPrice").val(filteration.minPrise);
    $("#Maxprice").val(filteration.maxPrise);
  };
  $(".min_val, .max_val").on("input", handleInput);

  $(
    ".badroom-any, .badroom-one, .badroom-two, .badroom-three, .badroom-four"
  ).click(function () {
    $(" .badroom-one, .badroom-two, .badroom-three, .badroom-four").css({
      "background-color": "",
      color: "",
    });

    $(".badroom-any").css({
      "background-color": "transparent",
      color: "black",
    });
    $(this).css({
      "background-color": "black",
      color: "white",
    });
    filteration.badroom = $(this).text().trim();
    $("#badroom").val(filteration.badroom);
  });
  $(".bads-any, .bads-one, .bads-two, .bads-three, .bads-four").click(
    function () {
      $(" .bads-one, .bads-two, .bads-three, .bads-four").css({
        "background-color": "",
        color: "",
      });

      $(".bads-any").css({
        "background-color": "transparent",
        color: "black",
      });
      $(this).css({
        "background-color": "black",
        color: "white",
      });
      filteration.beds = $(this).text().trim();
      $("#beds").val(filteration.beds);
    }
  );
  $(
    ".bathroom-any, .bathroom-one, .bathroom-two, .bathroom-three, .bathroom-four"
  ).click(function () {
    $(".bathroom-one, .bathroom-two, .bathroom-three, .bathroom-four").css({
      "background-color": "",
      color: "",
    });

    $(".bathroom-any").css({
      "background-color": "transparent",
      color: "black",
    });
    $(this).css({
      "background-color": "black",
      color: "white",
    });
    filteration.bathrom = $(this).text().trim();
    $("#bathroom").val(filteration.bathrom);
  });

  $(".guest-house, .house, .flat, .hotel").click(function () {
    $(".guest-house, .house, .flat, .hotel")
      .css({
        "background-color": "",
        color: "",
      })
      .find("svg")
      .css("fill", "");
    $(this)
      .css({
        "background-color": "black",
        color: "white",
      })
      .find("svg")
      .css("fill", "white");
    filteration.propertyType = $(this).attr("class").split(" ")[0];
    $("#propertyTtpe").val(filteration.propertyType);
  });

  const updateFilteration = () => {
    filteration.wifi = $("#wifiCheckbox").prop("checked");
    filteration.kitchen = $("#kitchenCheckbox").prop("checked");
    filteration.washingMachine = $("#washingMachineCheckbox").prop("checked");
    filteration.dryer = $("#dryerCheckbox").prop("checked");
    filteration.english = $("#englishCheckbox").prop("checked");
    filteration.hindi = $("#hindiCheckbox").prop("checked");
    filteration.odia = $("#odiaCheckbox").prop("checked");
  };
  $(":checkbox").change(updateFilteration);

  $(".reset_filter").click(function () {
    $(
      "#wifiCheckbox, #kitchenCheckbox, #washingMachineCheckbox, #dryerCheckbox, #englishCheckbox, #hindiCheckbox, #odiaCheckbox"
    ).prop("checked", false);
    filteration.wifi = false;
    filteration.kitchen = false;
    filteration.washingMachine = false;
    filteration.dryer = false;
    filteration.english = false;
    filteration.hindi = false;
    filteration.odia = false;
    filteration.typePlace = null;
    filteration.minPrise = null;
    filteration.maxPrise = null;
    filteration.badroom = null;
    filteration.propertyType = null;
    $(".guest-house, .house, .flat, .hotel")
      .css({
        "background-color": "",
        color: "",
      })
      .find("svg")
      .css("fill", "");
    $(".bathroom-one, .bathroom-two, .bathroom-three, .bathroom-four").css({
      "background-color": "",
      color: "",
    });
    $(" .bads-one, .bads-two, .bads-three, .bads-four").css({
      "background-color": "",
      color: "",
    });
    $(" .badroom-one, .badroom-two, .badroom-three, .badroom-four").css({
      "background-color": "",
      color: "",
    });
    $(".bads-any,.badroom-any,.bathroom-any").css({
      "background-color": "black",
      color: "white",
    });
    $(`.entier-home, .type-room, .any-type`).css({
      "background-color": "transparent",
      color: "black",
    });
    $(".any-type").css({
      "background-color": "black",
      color: "white",
    });
    $(".max_val").val("");
    $(".min_val").val("");
  });

  const initialFilteration = { ...filteration };
  const filterData = new Object();
  $(".submit_filter").on("click", function () {
    function printChangedKeys() {
      for (let key in filteration) {
        if (filteration[key] !== initialFilteration[key]) {
          filterData[key] = filterData[key];
          console.log(`${key}: ${filteration[key]}`);
        }
      }
    }
    printChangedKeys();
  });

  var selectedDates = [];
  bookDetails.checkIN = selectedDates[0];
  bookDetails.checkout = selectedDates[1];

  $(".calander_body").on("click", ".calenderdates", function () {
    var $this = $(this);
    var day = parseInt($this.text());
    var dateObj = { day: day, month: currentMonth, year: currentYear };

    if (selectedDates.length < 2 || $this.hasClass("date-selected")) {
      if ($this.hasClass("date-selected")) {
        selectedDates = selectedDates.filter(
          (date) =>
            date.day !== day ||
            date.month !== currentMonth ||
            date.year !== currentYear
        );
        $this.removeClass("date-selected");
      } else {
        if (selectedDates.length === 2) {
          $(".calenderdates").first().removeClass("date-selected");
          selectedDates.shift();
        }
        $this.addClass("date-selected");
        selectedDates.push(dateObj);
      }
    }

    if (selectedDates[0]) {
      let value =
        selectedDates[0].day +
        " " +
        selectedDates[0].month +
        " " +
        selectedDates[0].year;
      $(".startingDate").val(value);
      $("#checkin").val(value);
    }
    if (selectedDates[1]) {
      let value =
        selectedDates[1].day +
        " " +
        selectedDates[1].month +
        " " +
        selectedDates[1].year;
      $(".endingDate").val(value);
      $("#checkout").val(value);
    }
  });

  var currentYear = new Date().getFullYear();
  var currentMonth = new Date().getMonth();

  function renderCalendar(year, month) {
    var cuurfirstdate = new Date(year, month, 1);
    var firstday = cuurfirstdate.getDay();
    var nextmonth = new Date(year, month + 1, 1);
    var currlastdate = new Date(nextmonth - 1);
    var daysinMonth = currlastdate.getDate();
    var today = new Date();
    today.setHours(0, 0, 0, 0);

    var monthNames = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ];
    var monthname = monthNames[month];
    $(".month_year").text(monthname + " " + year);

    $(".calander_body").empty();

    var $row = $("<tr></tr>");
    for (var i = 0; i < firstday; i++) {
      $row.append("<td></td>");
    }

    var currentdate = 1;
    for (var i = firstday; i < 7; i++) {
      var date = new Date(year, month, currentdate);
      var pastClass = date < today ? "past-date" : "";
      $row.append(
        "<td class='" +
          pastClass +
          " " +
          "calenderdates" +
          "'>" +
          currentdate +
          "</td>"
      );
      currentdate++;
    }
    $(".calander_body").append($row);

    while (currentdate <= daysinMonth) {
      $row = $("<tr></tr>");
      for (var i = 0; i < 7 && currentdate <= daysinMonth; i++) {
        var date = new Date(year, month, currentdate);
        var pastClass = date < today ? "past-date" : "";
        $row.append(
          "<td class='" +
            pastClass +
            " " +
            "calenderdates" +
            "'>" +
            currentdate +
            "</td>"
        );
        currentdate++;
      }
      $(".calander_body").append($row);
    }
  }

  function goToNextMonth() {
    currentMonth++;
    if (currentMonth > 11) {
      currentMonth = 0;
      currentYear++;
    }
    selectedDates = [];
    renderCalendar(currentYear, currentMonth);
  }

  function goToPreviousMonth() {
    currentMonth--;
    if (currentMonth < 0) {
      currentMonth = 11;
      currentYear--;
    }
    selectedDates = [];
    renderCalendar(currentYear, currentMonth);
  }

  renderCalendar(currentYear, currentMonth);

  $("#next_month").click(goToNextMonth);
  $("#prev_month").click(goToPreviousMonth);
});
