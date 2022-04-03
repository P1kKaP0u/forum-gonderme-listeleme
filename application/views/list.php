<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("includes/header.php"); ?>

<body>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">message</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  
    foreach ($items as $item)
    {?>
        <tr>

        <th><?php echo $item->id; ?></th>
        <th><?php echo $item->name; ?></th>
        <th><?php echo $item->email; ?></th>
        <th><?php echo $item->phone; ?></th>
        <th><?php echo $item->message; ?></th>

        </tr>
   <?php } ?>

  </tbody>
</table>


<?php $this->load->view("includes/footer.php");?>
</body>
</html>