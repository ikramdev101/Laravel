<form action="/users" method='post'>

@csrf
    <input type="text" name="name" placeholder="Enter your name">
    <input type="text" name="email" placeholder="Enter your email">
    <button type="submit">Submit</button>
</form>