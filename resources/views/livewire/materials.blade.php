<div>
    <form wire:submit.prevent="createMaterial">
        <div>
            <input type="text" wire:model="title" placeholder="Material Title">
        </div>
        <div class="text-white">
            <input type="file" wire:model="file">
        </div>
        <div>
            <select wire:model="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="text-white">Add Material</button>
    </form>

    <h3 class="text-white">Uploaded Materials</h3>
    <ul class="text-white">
        @foreach (App\Models\Material::all() as $material)
            <li>
                {{ $material->title }} ({{ $material->category->name }})
                <a href="{{ Storage::url($material->file_path) }}" target="_blank">View PDF</a>
            </li>
        @endforeach
    </ul>
</div>
