<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use App\Models\DestinationImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::latest()->paginate(10);
        return view('admin.trips.index', compact('trips'));
    }

    public function create()
    {
        return view('admin.trips.create');
    }

    public function show(Trip $trip)
    {
        // get all the comments for the trip and count of likes and dislikes with pagination for the comments
        $trip->comments = $trip->comments()->with('user')->latest()->paginate(5);
        $trip->likes = $trip->likes()->with('user')->latest()->paginate(5);
        $trip->likes_count = $trip->likes->where('like', 1)->count(); 
      // lets get the destination images that are related to the trip
        $trip->destination_images = DestinationImage::where('trip_id', $trip->id)->get();
        return view('admin.trips.show', compact('trip'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'seats' => 'required',
            'supervisor' => 'required',
            'image' => 'required|image|max:5120', // 5MB max
            'destination' => 'required',
            'category' => 'required',
            'is_featured' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'is_started' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('trips', 'public');
            $validatedData['image'] = $imagePath;
        }

        Trip::create($validatedData);

        return redirect()->route('admin.trips.index')->with('success', 'Trip created successfully.');
    }

    public function edit(Trip $trip)
    {
        return view('admin.trips.edit', compact('trip'));
    }

    public function update(Request $request, Trip $trip)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'seats' => 'required',
            'supervisor' => 'required',
            'image' => 'image|max:5120',
            'destination' => 'required',
            'category' => 'required',
            'is_featured' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'is_started' => 'required',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($trip->image);
            $image = $request->file('image');
            $imagePath = $image->store('trips', 'public');
            $validatedData['image'] = $imagePath;
        }

        $trip->update($validatedData);

        return redirect()->route('admin.trips.index')->with('success', 'Trip updated successfully.');
    }

    public function destroy(Trip $trip)
    {
        $trip->delete();

        return redirect()->route('admin.trips.index')->with('success', 'Trip deleted successfully.');
    }
}
