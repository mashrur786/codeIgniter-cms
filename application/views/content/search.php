<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <h1> Search Content</h1>
        </div>
    </div>
    <div class="row">
         <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                     <form action="">
                         <div class="form-group">
                             <input id="search" class="form-control" type="text" name="title" placeholder="Search content by name">
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <h2> Added Content</h2>
        </div>
        <div class="col-md-8 offset-md-2">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody id="content-container">

              </tbody>
            </table>
        </div>
    </div>

</div>
<script>
    var BASE_URL = "<?php echo base_url(); ?>";
    var insertedIds = [];

 $(document).ready(function() {
    $( "#search" ).autocomplete({

        source: function(request, response) {
            $.ajax({
            url: BASE_URL + "index.php/contents/search_content",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return { id: obj.ID, label: obj.name };
               });
               response(resp);
            }
        });
    },
    minLength: 2,
    select: function (e, ui) {
        console.log(ui.item.id);
        $.ajax({
            url: BASE_URL + "index.php/contents/get",
            data: {
                    id : ui.item.id
             },
            dataType: "json",
            success: function(data){

                var output = "<tr>";
                    output += "<td>" + data[0].name + "</td>";
                    output += "<td>" + data[0].description + "</td>";
                    output += "</tr>";

                if(!insertedIds.includes(data[0].ID)) {
                    $('#content-container').append(output)
                    insertedIds.push(data[0].ID);
                } else {
                    alert('Oups! item already added...')
                }

               console.log(insertedIds);
            }
        });
    }
 })
});
</script>

