<h1>My CV</h1>
<h2>Kareem Almoghani</h2>

<h3 style="border-bottom: 2px solid #333; padding-bottom: 5px;">
    Education
</h3>

@foreach($educations as $edu)
    <div style="margin-bottom: 20px;">

        <!-- السطر الأول -->
        <div style="display: flex; justify-content: space-between;">
            <strong style="font-size: 16px;">
                {{ $edu->degree_trans }} in {{ $edu->field_trans }}
            </strong>
            <span style="font-size: 14px; color: #555;">
                {{ $edu->start_date }} - {{ $edu->end_date }}
            </span>
        </div>

        <!-- السطر الثاني -->
        <div style="display: flex; justify-content: space-between;">
            <span style="font-weight: bold;">
                {{ $edu->college_trans }}
            </span>
            <span style="color: #777;">
                {{ $edu->location_trans }}
            </span>
        </div>

        <!-- الوصف -->
        @if($edu->content)
            <p style="margin-top: 5px; color: #444; font-size: 14px;">
                {{ $edu->content_trans }}
            </p>
        @endif

    </div>
@endforeach

<h3 style="border-bottom: 2px solid #333; padding-bottom: 5px;">
    Experiences
</h3>
@foreach($experiences as $exp)
<div style="margin-bottom: 20px;">

        <!-- السطر الأول -->
        <div style="display: flex; justify-content: space-between;">
            <strong style="font-size: 16px;">
                {{ $exp->title_trans }} in {{ $exp->company_trans }}
            </strong>
            <span style="font-size: 14px; color: #555;">
                {{ $exp->start_date }} - {{ $exp->end_date }}
            </span>
        </div>

        <!-- السطر الثاني -->
        <div style="display: flex; justify-content: space-between;">
            <span style="color: #777;">
                {{ $exp->location_trans }}
            </span>
        </div>

        <!-- الوصف -->
        @if($exp->content)
            <p style="margin-top: 5px; color: #444; font-size: 14px;">
                {{ $exp->content_trans }}
            </p>
        @endif

    </div>

@endforeach

<h3 style="border-bottom: 2px solid #333; padding-bottom: 5px; margin-bottom: 15px;">
    Skills
</h3>

<div style="display: flex; flex-wrap: wrap; gap: 8px;">

@foreach($skills as $skill)
    <span style="
        background-color: #6c757d;
        color: white;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 13px;
        display: inline-block;
    ">
        {{ $skill->title_trans }}
    </span>
@endforeach

</div>
<h3 style="border-bottom: 2px solid #333; padding-bottom: 5px;">
    Languages
</h3>
<div style="display: flex; flex-wrap: wrap; gap: 8px;">

@foreach($languages as $language)
    <span style="
        background-color: #6c757d;
        color: white;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 13px;
        display: inline-block;
    ">
        {{ $language->title_trans }}
    </span>
@endforeach

</div>
