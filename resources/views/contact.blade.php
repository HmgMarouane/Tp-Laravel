<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <div>
        <form method="POST" action="{{route('submit')}}">
            @csrf
        <div>
          <label>Email </label>
          <input type="email" name="email" placeholder="name@example.com">
        </div>
        <div>
          <label>name</label>
          <input type="text" name="nom" placeholder="nom">
        </div>
      
        <div>
          <label>textarea</label>
          <textarea name="message" rows="3">your message ..........</textarea>
        </div>
        <div>
          <button type="submit">Send your message</button>
      </div>
      </form>
    </div>
</body>
</html>