<!-- Scripts -->
<script src="{{ url('dis/scripts/jQuery3.5.1.js') }}"></script>
<script src="{{url('dis/scripts/bootstrap.min.js')}}"></script>
<script src="{{url('dis/scripts/main.js')}}"></script>

<script>
  $(document).ready(function(){

    // Get id and pass it to modal
    $('.btnModal').on('click', function(){
      modal = $('.candidateInfo')
        id = $(this).attr('data-id');
        $.ajax({
          url: "{{ url('get_details') }}" + '/' + id,
          dataType: "json",
          method: "get",
          success:function(data){
            detail = data[0]
            modal.empty()
            console.log(data)
            modal.append(`
                <ul>
                  <li>` + detail.name + `</li>
                  <li>` + detail.motto + `</li>
                  <li>` + detail.vision + `</li>
                  <li>` + detail.mission + `</li>
                </ul>
                <img src="/storage/${detail.image}" width="100%">
            `)
          }
        })
    })

  })

</script>