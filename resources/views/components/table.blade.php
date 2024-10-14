@props(['title', 'head' => [], 'data' => [], 'actionHeader' => false, 'actionColumn' => null])

<table id="{{ $title }}" class="w-full text-left">
    <thead>
      <tr class="text-gray-400">

        @foreach ($head as $header)
        <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800">{{ $header }}</th>
          @endforeach
      @if($actionHeader)  {{-- Check if action header is provided --}}
    <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800">Action</th>
    @endif
</tr>


    </thead>
    <tbody class="text-gray-600 dark:text-gray-100">
     @foreach ($data as $row)
      <tr>
        @foreach ($row as $cell)
        <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
            <div class="flex items-center">
                {{ $cell }}
            </div>
          </td>
        @endforeach
        @if($actionColumn)
        <td>
            {!! $actionColumn[$row['id']] !!}
        </td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>



