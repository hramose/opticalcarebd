$(document).ready(function(){
    var table = $('#dt_tableExport').DataTable({
            "destroy": true,
            "processing": true,
            "serverSide": true,
            "ajax": "api/frame",
            "columns":[
                {data: 'id'},
                {data: 'category'},
                {data: 'quantity'},
                {data: 'created_at'},
                {data: 'updated_at'},
               {mRender: function (data, type, row) {
                    return '<a id="updateQuantityModel" data-uk-modal="{target:'+"'#model_frame'"+'}"><i class="md-icon material-icons md-36 uk-text-primary" data-id="' + row.id + '">&#xE923;</i><input type="hidden" id="frameCategory" value="'+ row.category +'"><input type="hidden" id="frameQuantity" value="'+ row.quantity +'"></a> <a id="editModel" data-uk-modal="{target:'+"'#model_frame'"+'}"><i class="md-icon material-icons md-36 uk-text-primary" data-id="' + row.id + '">&#xE254;</i><input type="hidden" id="editFrameCategory" value="'+ row.category +'"><input type="hidden" id="editFrameQuantity" value="'+ row.quantity +'"></a>  <a id="deleteFrame"><i class="md-icon material-icons md-36 uk-text-danger" data-id="' + row.id + '">&#xE92B;</i></a>'
                }
                }
            ]
        });
        $(document).on('click','#addFrameModel', function(event){
            $('.uk-modal-title').text('Add New Frame');
             $("#txtCategory").val("");
            $('#txtQuantity').val("");
            $("#txtCategory").prop('disabled', false);
            $("#txtQuantity").prop('disabled', false);
            $('#btnAddFrame').show();
            $('#addQuantity').hide(0);
            $('#btnUpdateQuantity').hide(0);
            $('#btnEdit').hide(0);
        });
        $(document).on('click', '#updateQuantityModel', function(event){
            var id = $(this).find( "i" ).attr( "data-id" );                                                        
            var category = $(this).find('#frameCategory').val();
            var quantity = $(this).find('#frameQuantity').val();

            $('#frameId').val(id);           
            $("#txtCategory").val(category);
            $('#txtQuantity').val(quantity);
            $('.uk-modal-title').text('Update Quantity');
            $("#txtCategory").prop('disabled', true);
            $("#txtQuantity").prop('disabled', true);
            $('#txtNewQuantity').val("");
            $('#addQuantity').show();
            $('#btnUpdateQuantity').show();
            $('#btnAddFrame').hide(0);
            $('#btnEdit').hide(0);
        });
        $(document).on('click', '#editModel', function(event){
            var id = $(this).find( "i" ).attr( "data-id" );                                    
            var category = $(this).find('#editFrameCategory').val();
            var quantity = $(this).find('#editFrameQuantity').val();
            $('#frameId').val(id);
            $("#txtCategory").val(category);
            $('#txtQuantity').val(quantity);
            $('.uk-modal-title').text('Edit Frame Info');
            $("#txtCategory").prop('disabled', false);
            $("#txtQuantity").prop('disabled', false);                    
            $('#btnEdit').show();
            $('#btnAddFrame').hide(0);
            $('#btnUpdateQuantity').hide(0);
            $('#addQuantity').hide(0);
        });
    $('#btnAddFrame').click(function(event){
        var category = $('#txtCategory').val();
        var quantity = $('#txtQuantity').val();
        if(!category == "" && !quantity == ""){
            $.post('frame',{'category' : category, 'quantity' : quantity,'_token' : $('input[name=_token]').val()}, function(data){
                table.ajax.reload( null, false );
                swal("Good job!", "New Frame Successfully Added!", "success")
            });
        }else{
            sweetAlert("Oops...", "Category and Quantity both are required :(", "error");
        }
    });
    $(document).on('click', '#btnEdit', function(event){
        var id = $( "#frameId" ).val();                
        var category = $('#txtCategory').val();
        var quantity = $('#txtQuantity').val();
        if (!category == "" && !quantity == "") {
            $.post('frame/edit',{'id':id,'category':category,'quantity':quantity,'_token':$('input[name=_token]').val()}, function(data){
                table.ajax.reload( null, false );                    
                swal("Saved!", "Your change successfully saved", "success")
            });
        } else {
            sweetAlert("Oops...", "Category and Quantity both are required :(", "error");
        }
    });
    $(document).on('click','#btnUpdateQuantity', function(event){
        var id = $( "#frameId" ).val();
        var quantity = $('#txtQuantity').val(); 
        var addQuantity = $('#txtNewQuantity').val();
        var newQuantity = +quantity + +addQuantity;
        if (!addQuantity == "") {
            $.post('frame/update',{'id':id,'newQuantity':newQuantity,'_token':$('input[name=_token]').val() }, function(data){
                table.ajax.reload( null, false);
                swal("Updated!","Quantity successfully updated","success")
            }); 
        } else {
            sweetAlert("Oops...", "Please enter Quantity to update :(", "error");            
        }
    });
    $(document).on('click', '#deleteFrame', function(event){
        var id = $(this).find( "i" ).attr( "data-id" );
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
                },
                function(isConfirm){
                if (isConfirm) {
                     $.post('frame/delete', {'id': id, '_token':$('input[name=_token]').val(),'_method':$('input[name=_method]').val()}, function(data){
                        table.ajax.reload( null, false );                    
                    });
                    swal("Deleted!", "Your data has been deleted.", "success");
                } else {
                    swal("Cancelled", "Your data is safe :)", "error");
                }
            });
        });
});