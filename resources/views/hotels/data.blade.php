
@foreach($hotels as $hotel)
	<li class="card">
		<a href="/hotels/{{ $hotel->id }}">
			<img src="{{ URL($hotel->hotel_thumbnail) }}">
			<div class="card-meta">
				<h2 class="hotel-name">{{ $hotel->name }}</h2>
				<span>{{ $hotel->address }}</span>
				<div>
					<span>{{ $hotel->reviews->count('id') }} Reviews</span>
					<span class="price">${{ $hotel->rooms->min('price') }}</span>
				</div>
			</div>
		</a>
	</li>
@endforeach

