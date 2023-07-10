<?php $this->extend("layouts/layout"); ?>
<?php $this->section("title"); ?>
Home
<?php $this->endsection(); ?>



<?php $this->section("content"); ?>

<table class="table table-bordered">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">First-Name</th>
      <th scope="col">Last-Name</th>
      <th scope="col">Phone-number</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row">
        <?php echo $post['id'] ?>
        <a  class="btn-home" href="/posts/welcome">Back </a>
      </th>
      <td><?php echo $post['email'] ?></td>
      <td><?php echo $post['first_name'] ?></td>
      <td><?php echo $post['last_name'] ?></td>
      <td><?php echo $post['number'] ?></td>
      <td><input type="submit" value="delete" class="delete-btn"></td>
    </tr>
    
  </tbody>
</table>
<style>
    .delete-btn{
    background-color: red;
    border: none;
    color: white;
    padding: 9px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
}
.btn-home{
    cursor: pointer;
left:   2%;
position: relative;

background-color: #04AA6D;
border: none;
color: white;
padding: 9px 32px;
text-decoration: none;
margin: 4px 2px;
cursor: pointer;
border-radius: 4px;

}
</style> 

<?php $this->endsection(); ?>