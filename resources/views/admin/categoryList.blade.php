<x-master>
<<<<<<< HEAD


    <div class=" justify-content-center fs-5 mb-3">
        <a href="#" class="btn btn-success" type="submit">Add Category</a>
=======
    <div class=" justify-content-center fs-5 mb-3">
        <a href="{{url('addCategory')}}" class="btn btn-success" type="submit">Add Category</a>
>>>>>>> e5a88eff176f8dc1b2736e363fae4de3febfd3e9
    </div>

    <table class=" table table-success table-striped table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Products</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">1</td>
                <td>Apple</td>
                <td>
                    10
                </td>
                <td>
<<<<<<< HEAD
                    <a href="#" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                    <a href="#" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
=======
                    <a href="{{url('viewCategory')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                    <a href="{{url('editCategory')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
>>>>>>> e5a88eff176f8dc1b2736e363fae4de3febfd3e9
                    <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
<<<<<<< HEAD



=======
    </div>
>>>>>>> e5a88eff176f8dc1b2736e363fae4de3febfd3e9
</x-master>