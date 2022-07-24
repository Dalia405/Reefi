<form action="/send" method="post" >

     @csrf
    
    
     <div class="form-group">
    
        <label>name</label>
       
        <input type="text" class="form-control" name="name" id="name" value={{old("name")}}>
       
        <label for="name"> {{ $errors->first('name') }}</label>
        
     <div class="form-group">
    
     <label>Email</label>
    
     <input type="email" class="form-control" name="email" id="email" value={{old("email")}}>
    
     <label for="message"> {{ $errors->first('email') }}</label>
    
    
    
     <div class="form-group">
    
     <label>Message</label>
    
     <textarea class="form-control" name="message" id="message" rows="5" value={{old("message")}}></textarea>
    
     <label for="message"> {{ $errors->first('message') }}</label>
    
    
    
    
    
     </div>
    
     <button name="send" class="btn btn-dark btn-block" type="submit">Send</button>
    
    
    
     <!--<input type="submit" name="send" value="Send" class="btn btn-dark btn-block">-->
    
     </form>
    
     </div>