<div class="d-flex">
    <a href="{{route('product.show', ['Product'=> $Product->id])}}"class="btn btn-outline-dark btn-smme-2">
        <i class="bi-person-lines-fill"></i></a>
            <a href="{{route('Product.edit', ['Product'=> $Product->id ])}}"class="btn btn-outline-dark btn-smme-2"><i class="bi-pencil-square"></i></a>
<div>
<form action="{{ route('product.destroy',['Product'=>$Product->id]) }}"method="POST">
@csrf
@method('delete')
<button type="submit"class="btn btn-outline-dark btn-smme-2"><i class="bi-trash"></i></button>
</form>
</div>
</div>
