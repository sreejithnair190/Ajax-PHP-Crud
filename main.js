$(document).ready(function () {
  // Read all users from db
  function showAllUsers() {
    $.ajax({
      url: "action.php",
      type: "POST",
      data: {
        action: "view",
      },
      success: function (response) {
        $("#show-user").html(response);
        $("table").DataTable({
          order: [0, "desc"],
        });
      },
    });
  }
  showAllUsers();

  // Insert users
  $("#insert").click(function (e) {
    // console.log($("#form-data").serialize() + "&action=insert");
    if ($("#form-data")[0].checkValidity()) {
      e.preventDefault();
      $.ajax({
        url: "action.php",
        type: "POST",
        data: $("#form-data").serialize() + "&action=insert",
        success: function (response) {
          Swal.fire({
            title: "User added successfully!",
            icon: "success",
          });
          $("#add-modal").modal("hide");
          $("#form-data")[0].reset();
          showAllUsers();
        },
      });
    }
  });

  // Edit User
  $("body").on("click", ".editBtn", function (e) {
    e.preventDefault();
    let editId = $(this).attr("id");
    $.ajax({
      url: "action.php",
      type: "POST",
      data: { editId: editId },
      success: function (response) {
        let data = JSON.parse(response);
        // console.log(data);
        $("#edit-id").val(data.id);
        $("#fname").val(data.fname);
        $("#lname").val(data.lname);
        $("#email").val(data.email);
        $("#phone").val(data.phone);
      },
    });
  });

  // Update User
  $("#edit").click(function (e) {
    // console.log($("#edit-form-data").serialize() + "&action=edit");
    if ($("#edit-form-data")[0].checkValidity()) {
      e.preventDefault();
      $.ajax({
        url: "action.php",
        type: "POST",
        data: $("#edit-form-data").serialize() + "&action=edit",
        success: function (response) {
          Swal.fire({
            title: "User updated successfully!",
            icon: "success",
          });

          $("#edit-modal").modal("hide");
          showAllUsers();
        },
      });
    }
  });

  $("body").on("click", ".deleteBtn", function (e) {
    e.preventDefault();
    let tr = $(this).closest("tr");
    let deleteID = $(this).attr("id");
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, cancel!",
      reverseButtons: true,
    }).then(function (result) {
      if (result.value) {
        $.ajax({
          url:"action.php",
          type:"POST",
          data:{deleteID:deleteID},
          success:function (response) {  
            console.log(response);
            tr.css("background-color","red")
            Swal.fire("Deleted!", "User has been deleted.", "success");
            showAllUsers();
          }
        });
      } else if (result.dismiss === "cancel") {
        Swal.fire("Cancelled", "error");
      }
    });
  });

  $("body").on("click",".infoBtn",function(e){
    e.preventDefault();
    let viewId = $(this).attr("id");
    $.ajax({
      url:"action.php",
      type:"POST",
      data:{viewId:viewId},
      success:function (response) { 
        let data = JSON.parse(response);
        Swal.fire({
          title:"<strong>User Info</strong>",
          icon:"info",
          html:"<b>User Id : </b>"+data.id+"</br>"+
               "<b>Name : </b>"+data.fname+" "+data.lname+"</br>"+
               "<b>Email : </b>"+data.email+"</br>"+
               "<b>Phone : </b>"+data.phone+"</br>"
        });
      }
    });
  })
});
