<div>
 hi from livewire

 <div>
    <span>{{$count}}</span>

    <button wire:click='decrement'>-</button>
    <button wire:click='increment'>+</button>
 </div>

 <h2>form</h2>


 <form wire:submit.prevent='submit' method="post">
   <input wire:model='name' type="text" placeholder="name">
   {{--@error('name')
       <p>{{'message'}}</p>
   @enderror--}}
   <input wire:model='email' type="text" placeholder="email">
   <input wire:model='password' type="text" placeholder="password">
   <button type="submit">Submit</button>
</form>
{{--<p>{{$name}}</p>--}}
<div>
   @if($message1)
   <p>{{$message1}}</p>
      
   <button type="button" wire:click='$set("message1", null)'>Remove</button>
   @endif
</div>
{{--@if(session()->has('message')) {
   <div>
      {{session('succes')}}
   </div>
}

@endif*/---}}
</div>
