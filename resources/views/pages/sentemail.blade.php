<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="emailForm">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" id="id" value="{{Auth::user()->id}}">
        </div>
        <div class="form-group">
            <input type="checkbox" name="agree_pledge" id="agree_pledge" value="yes" class="form-control">
            <label for="agree_pledge"> Check This </label>
        </div>
        <button class="btn btn-primary" type="submit" name="submit">
            Send Email Now
        </button>
    </form>

    <h1 id="response"></h1>

    <script src="{{ url('dis/scripts/jQuery3.5.1.js') }}"></script>

    <script type="text/javascript">
        $('#emailForm').on('submit',function(event){
        event.preventDefault();

        id = $('#id').val();
        agree_pledge = $('#agree_pledge').val();

        $.ajax({
            url: "/sentemail/update",
            type:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                id:id,
                agree_pledge:agree_pledge,
            },
                success:function(response){
                    document.getElementById("emailForm").remove();
                    document.getElementById("response").innerHTML="Check Your Email";
                },
            });
        });
    </script>


</body>
</html>