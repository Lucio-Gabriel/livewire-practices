<div>

    <div class="text-white">

        <input class="text-black" type="text" name="name" wire:model="name">
        <button wire:click="submit">Salvar Usuario</button>

        <button type="submit" wire:click="send">Enviar Usuario</button>

    </div>

    <div>
        @foreach ($users as $user)

            {{ $user->name }}

        @endforeach
    </div>

</div>
