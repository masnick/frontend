<img src="<?php echo $this->theme->asset('image', 'error.png'); ?>">
<?php if($this->user->isLoggedIn() && !$this->user->isAdmin()) { ?>
  <h1>Sorry, but you don't have permission to view this page.</h1>
<?php } else { ?>
  <h1>You need to be logged in to view this page.</h1>
<?php } ?>
