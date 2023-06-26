@props(['disabled' => false])

{{-- <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}> --}}

<div class="w-full mb-4 ">
    <div class="">
        <textarea {{ $disabled ? 'disabled' : '' }} rows="4" {!! $attributes->merge(['class' => 'text-gray-900 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!} placeholder="Write a comment..." required></textarea>
    </div>
</div>
 