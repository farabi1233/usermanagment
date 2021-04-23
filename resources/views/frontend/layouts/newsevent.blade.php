<section class="nesw_events" style="background: #ddd">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="padding-top: 15px;">
					<h3 style="border-bottom: 1px solid #000;width: 85%">News and Events</h3>
				</div>
				<div class="col-md-9" style="padding-top: 15px;">
					<table class="table table-striped table-bordered table-hover table-md table-warning">
						<thead class="thead-dark">
							<tr>
								<th>SL</th>
								<th>Date</th>
								<th>Image</th>
								<th>Title</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($newsEvent as $key2 => $newsEvent )
							<tr>
								<td>{{$key2+1}}</td>
								<td>{{date('d-m-Y',strtotime($newsEvent->date))}}</td>
								<td><img src="{{(!empty($newsEvent->image))? url('upload/news_event_images/'.$newsEvent->image):url('upload/no_image.jpg') }}"></td>
								<td>{{$newsEvent->short_title}}</td>
								<td><a href="{{route('news.event.details',$newsEvent->id)}}" class="btn btn-info">Details</a></td>
							</tr>
						@endforeach
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>