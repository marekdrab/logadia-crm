<div>
    <form wire:submit.prevent="createCategory">
        <div>
            <input type="text" wire:model="name" placeholder="Category Name">
        </div>
        <div>
            <select wire:model="parent_id">
                <option value="">No Parent</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="text-white">Add Category</button>
    </form>

    <h3 class="text-white">Categories</h3>
    <ul class="text-white">
        @foreach ($categories as $category)
            <li>
                {{ $category->name }}
                @if($category->children)
                    <ul>
                        @foreach ($category->children as $child)
                            <li>{{ $child->name }}</li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</div>
