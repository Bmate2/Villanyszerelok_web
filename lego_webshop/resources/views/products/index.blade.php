<h1>Áruk listája</h1>
<a href="{{ route('products.create') }}">Új áru hozzáadása</a>
<table>
    <thead>
        <tr>
            <th>Név</th>
            <th>Leírás</th>
            <th>Ár</th>
            <th>Készlet</th>
            <th>Műveletek</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}">Szerkesztés</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Törlés</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
