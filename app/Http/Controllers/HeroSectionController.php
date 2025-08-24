<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHeroSectionRequest;
use App\Http\Requests\UpdateHeroSectionRequest;
use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = "Hero Section";
        $hero_sections = HeroSection::orderByDesc('id')->paginate(50);
        return view('admin.hero_sections.index', [
            'pageTitle' => $pageTitle,
            'hero_sections' => $hero_sections
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Tambah Hero Section';

        return view('admin.hero_sections.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHeroSectionRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('banner')) {
                $iconPath = $request->file('banner')->store('banners', 'public');
                $validated['banner'] = $iconPath;
            }

            if ($validated['achievement'] == null) {
                $validated['achievement'] = '-';
            }

            $validated['path_video'] = '-';

            HeroSection::create($validated);
        });

        return redirect()->route('admin.hero_sections.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pageTitle = 'Detail Hero Sections';
        $hero = HeroSection::find($id);

        return view('admin.hero_sections.show', compact('pageTitle', 'hero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pageTitle = 'Ubah Hero Sections';
        $hero_section = HeroSection::find($id);

        return view('admin.hero_sections.edit', compact('pageTitle', 'hero_section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeroSectionRequest $request, HeroSection $hero_section)
    {
        DB::transaction(function () use ($request, $hero_section) {
            $validated = $request->validated();

            if ($request->hasFile('banner')) {
                $iconPath = $request->file('banner')->store('banners', 'public');
                $validated['banner'] = $iconPath;
            }

            if ($validated['achievement'] == null) {
                $validated['achievement'] = '-';
            }

            $validated['path_video'] = '-';

            $hero_section->update($validated);
        });
        return redirect()->route('admin.hero_sections.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hero = HeroSection::find($id);

        DB::transaction(function () use ($hero) {
            // Delete Hero
            $hero->delete();
        });
        return redirect()->route('admin.hero_sections.index');
    }
}
