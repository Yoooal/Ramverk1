<div class="container" role="main">
  <div class="page-content">
    <div class="row">
      <form role='form' method='POST' action=''>
        <div class="form-group">
            <label for="new_name">Email: </label>
            <input type="text" name="email" class="form-control" required/>
        </div>
        <div class='form-group'>
            <label for='new_name'>Comment: </label>
            <textarea name='message' rows='8' cols='80' class='form-control'></textarea>
        </div>
        <input type='hidden' name='user_id' value=''>
        <button type='submit' class='btn btn-primary' name='submit'>Comment</button>
      </form>
    </div>
  </div>
</div>
