<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                <form action="{{route('sendmessage')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <lable for="message">Message:</lable>
                        <input type="text" name="message" id="message">
                    </div>

                    <button class="btn btn-success" type="submit">SendMessage</button>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
