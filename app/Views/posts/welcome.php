<?php $this->extend("layouts/layout"); ?>
<?php $this->section("title"); ?>
Home
<?php $this->endsection(); ?>



<?php $this->section("content"); ?>
<?php
if (session()->getFlashdata('status')) {
  echo "<h4>" . session()->getFlashdata('status') . "</h4>";
}
?>
<div class="row my-4">
  <div class="col-md-10 mx-auto">
    <div class="card">
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
          <?php foreach ($posts as $post) : ?>
            <tr>
              <th scope="row">
                <?php echo $post['id'] ?>
                <a class="btn-home" href="<?php echo ('/posts/show/' . $post["id"]); ?>">Show</a>
              </th>
              <td><?php echo $post['email'] ?></td>
              <td><?php echo $post['first_name'] ?></td>
              <td><?php echo $post['last_name'] ?></td>
              <td><?php echo $post['number'] ?></td>
              <td><a href="<?php echo base_url('posts/edit/' . $post['id']); ?>" class="btn-home">Edit</a>
                <a href="<?php echo base_url('PagesController/delete/' . $post['id']); ?>" class="delete-btn">Delete </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<style>
  .delete-btn {
    background-color: red;
    border: none;
    color: white;
    left: 30%;
    position: relative;
    padding: 8px 22px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
  }

  .btn-home {
    cursor: pointer;
    position: relative;
    /* bottom:30%; */
    left: 30%;
    background-color: #04AA6D;
    border: none;
    color: white;
    padding: 8px 22px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;

  }
</style>


<?php $this->endsection(); ?>