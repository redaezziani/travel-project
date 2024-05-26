<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DestinationImage;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinationImageController extends Controller
{
    public function index()
    {
        $destinationImages = DestinationImage::latest()->paginate(10);
        $trips = Trip::all();
        return view('admin.destination-images.index', compact('destinationImages', 'trips'));
    }

    public function create()
    {
        return view('admin.destination-images.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'trip_id' => 'required|exists:trips,id',
            'destination' => 'required',
            'image' => 'required|image|max:2048',
        ]);
    
        $imagePath = $request->file('image')->store('destination_images', 'public');
    
        DestinationImage::create([
            'trip_id' => $validatedData['trip_id'],
            'destination' => $validatedData['destination'],
            'image' => $imagePath,
        ]);
    
        return redirect()->route('admin.destination-images.index')->with('success', 'Destination image added successfully.');
    }
    

    public function edit(DestinationImage $destinationImage)
    {
        return view('admin.destination-images.edit', compact('destinationImage'));
    }

    public function update(Request $request, DestinationImage $destinationImage)
    {
        $validatedData = $request->validate([
            'destination' => 'required',
            'image' => 'image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($destinationImage->image);
            $image = $request->file('image');
            $imagePath = $image->store('destination-images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $destinationImage->update($validatedData);

        return redirect()->route('admin.destination-images.index')->with('success', 'Destination image updated successfully.');
    }

    public function destroy(DestinationImage $destinationImage)
    {
        Storage::disk('public')->delete($destinationImage->image);
        $destinationImage->delete();
        return redirect()->route('admin.destination-images.index')->with('success', 'Destination image deleted successfully.');
    }
}
