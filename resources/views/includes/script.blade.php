<!-- Scripts -->
<script src="{{ url('dis/scripts/jQuery3.5.1.js') }}"></script>
<script src="{{url('dis/scripts/bootstrap.min.js')}}"></script>
<script src="{{url('dis/scripts/main.js')}}"></script>

<script>
  $(document).ready(function(){

    // Get id and pass it to modal
    $('.btnModal').on('click', function(){
        id = $(this).attr('data-id');
        modal = $('.modalDetail');
        $.ajax({
          url: "{{ url('get_details') }}" + '/' + id,
          dataType: "json",
          method: "get",
          success:function(data){
            detail = data[0]
            console.log(detail.name)
            modal.append(`
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Visi & Misi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <ul>
                      <li>` + detail.name + `</li>
                      <li>` + detail.motto + `</li>
                      <li>` + detail.vision + `</li>
                      <li>` + detail.mission + `</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            `)
          }
        })
    })

  })

</script>