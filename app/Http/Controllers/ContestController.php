<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contest;
use App\Models\OtherImage;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContestController extends Controller
{
    private $contest;
    private $contests;
    private $otherImages;

    public function index()
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.contest.index', compact('categories'));
    }

    public function create(Request $request)
    {
        $this->contest = Contest::createNewContest($request);
        OtherImage::createOtherImages($request, $this->contest->id);
        Alert::success('contest create successfully', '');
        return redirect()->back();
    }

    public function manage()
    {
        $this->contests = Contest::latest()->get();
        return view('admin.contest.manage', [
            'contests' => $this->contests
        ]);
    }

    public function edit($id)
    {
        $this->contest = Contest::find($id);
        $categories = Category::where('status', 1)->get();
        return view('admin.contest.edit', [
            'contest' => $this->contest,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        Contest::updateContest($request, $id);
        if ($request->file('other_images'))
        {
            OtherImage::updateOtherImage($request, $id);
        }
        Alert::success('contest update successfully', '');
        return redirect()->route('contest.manage');
    }

    public function delete($id)
    {
        $this->contest = Contest::find($id);
        $this->otherImages = OtherImage::where('contest_id', $id)->get();
        if (file_exists($this->contest->image))
        {
            unlink($this->contest->image);
        }
        foreach ($this->otherImages as $otherImage)
        {
            if (file_exists($otherImage->image))
            {
                unlink($otherImage->image);
            }
            $otherImage->delete();
        }
        $this->contest->delete();
        Alert::success('contest delete successfully', '');
        return redirect()->back();
    }


}
