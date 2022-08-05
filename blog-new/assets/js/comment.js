$(document).ready(function () {
  showComments();

  // create comment function
  $("#add_comment_button").click(function (event) {
    event.preventDefault();
    var post_id = $("#post_id").val();
    var message = $("#comment_textbox").val();
    if ($.trim(message).length == 0) {
      error_message = "Please enter a comment";
      $("#error_status").text(error_message);
    } else {
      error_message = "";
      $("#error_status").text(error_message);
    }

    if (error_message != "") {
      return false;
    } else {
      var data = {
        post_id: post_id,
        message: message,
        "add-comment": true,
      };

      //   ajax call
      $.ajax({
        type: "POST",
        url: "comment.php",
        data: data,
        success: function (response) {
          $("#comment_textbox").val("");
          showComments();
        },
      });
    }
  });

  // Load comments function
  function showComments() {
    $.ajax({
      type: "POST",
      url: "comment.php",
      data: {
        "load-comment": true,
        post_id: $("#post_id").val(),
      },

      success: function (response) {
        $("#comment-container").html(response);
      },
    });
  }

  // Reply button event will show reply form
  $(document).on("click", "#relpy_btn", function () {
    // grab the comment id value
    var thisClicked = $(this);
    var comment_id = thisClicked.attr("value");

    console.log(comment_id);
    // empty the reply section
    $("#reply-section").html("");
    // when pressed reply button, show the reply form
    thisClicked
      .closest("#reply-box")
      .find("#reply-section")
      .html(
        '<div>\
              <input type="text" class="form-control my-2" id="reply-message" placeholder="relpy to the comment">\
              <div class="text-end">\
                <button class="badge btn-secondary" id="reply-add-button">Reply</button>\
                <button class="badge btn-danger" id="reply-cancle-button">Cancle</button>\
              </div>\
            </div>\
        '
      );
  });

  // relpy cancle button hide the reply form
  $(document).on("click", "#reply-cancle-button", function () {
    $("#reply-section").html("");
  });

  // Reply add button event will add reply to the comment
  $(document).on("click", "#reply-add-button", function (e) {
    e.preventDefault();

    var thisClicked = $(this);
    var comment_id = thisClicked
      .closest("#reply-box")
      .find("#relpy_btn")
      .attr("value");
    var reply_message = thisClicked
      .closest("#reply-box")
      .find("#reply-message")
      .val();

    var data = {
      comment_id: comment_id,
      reply_message: reply_message,
      "add-reply": true,
    };

    console.log(data);

    // ajax call
    $.ajax({
      type: "POST",
      url: "comment.php",
      data: data,
      success: function (response) {
        $("#reply-section").html("");
      },
    });
  });

  // view all reply button event will show all reply
  $(document).on("click", "#view_relpy_btn", function (e) {
    e.preventDefault();

    var viewBtnClicked = $(this);
    var comment_id = viewBtnClicked
      .closest("#reply-box")
      .find("#relpy_btn")
      .attr("value");
    console.log(comment_id);

    var data = {
      "view-reply": true,
      reply_id: comment_id,
    };
    console.log(data);
    // ajax call
    $.ajax({
      type: "POST",
      url: "comment.php",
      data: data,
      success: function (response) {
        $("#reply-section").html("");
        viewBtnClicked
          .closest("#reply-box")
          .find("#reply-section")
          .html(response);
      },
    });
  });

  // reply to sub reply  event will show reply form
  $(document).on("click", "#sub_relpy_btn", function (e) {
    e.preventDefault();

    var subReplyBtnClicked = $(this);
    var sub_reply_id = subReplyBtnClicked.attr("value");
    var username = subReplyBtnClicked
      .closest("#sub-reply-box")
      .find("#get_username")
      .val();
    console.log(sub_reply_id);
    console.log(username);

    // empty the reply section
    $("#sub-reply-section").html("");

    // when pressed reply button, show the reply form
    subReplyBtnClicked
      .closest("#sub-reply-box")
      .find("#sub-reply-section")
      .append(
        '<div>\
          <input type="text" class="form-control my-2" id="sub-reply-message" placeholder="relpy to the comment" value="@' +
          username +
          '">\
        <div class="text-end">\
          <button class="badge btn-secondary" id="sub-reply-add-button">Reply</button>\
          <button class="badge btn-danger" id="sub-reply-cancle-button">Cancle</button>\
        </div>\
        </div>\
        '
      );
  });

  // sub reply cancle button hide the reply form
  $(document).on("click", "#sub-reply-cancle-button", function () {
    $("#sub-reply-section").html("");
  });

  // sub reply add button event will add reply to the comment
  $(document).on("click", "#sub-reply-add-button", function (e) {
    e.preventDefault();

    var subReplyBtnClicked = $(this);
    var sub_reply_id = subReplyBtnClicked
      .closest("#sub-reply-box")
      .find("#sub_relpy_btn")
      .attr("value");
    var sub_reply_message = subReplyBtnClicked
      .closest("#sub-reply-box")
      .find("#sub-reply-message")
      .val();

    var data = {
      sub_reply_id: sub_reply_id,
      sub_reply_message: sub_reply_message,
      "add-sub-reply": true,
    };

    $.ajax({
      type: "POST",
      url: "comment.php",
      data: data,
      success: function (response) {
        $("#reply-section").html("");
        showComments();
      },
    });
  });
});
