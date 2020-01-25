<!DOCTYPE html>
<HTML>

<head>
    <title>Edit Window</title>
    <style>
        .collapsible {
            background-color: #777;
            color: white;
            cursor: pointer;
            padding: 1vh;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            background: #777;
        }

        .active,
        .collapsible:hover {
            background-color: #555;
        }

        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #f1f1f1;
        }

        button {
            font-size: 1vw;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        @include ('navbar');
        <div class='column maincontent'>
            <!-- /** Contact Me -->
            @if(isset($edit_contact_info))
            <button type="button" class="collapsible">
                <h2 style='text-align:center; font-size: 2vw;color: white;'>User info</h2>
            </button>
            <div class="content">
                <form name="contactMeForm" id="contactMeForm" method="post" onsubmit="return validateContactInfo()" action="contactInfo">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="columnEdit">
                            <table style="border-spacing: 0;">
                                <tr>
                                    <td>
                                        <p>Address Line1</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="address_line1" id="address_line1" value="{{ $edit_contact_info[0]->address_line1 }}" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Address Line2</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="address_line2" id="address_line2" value="{{ $edit_contact_info[0]->address_line2 }}" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>City</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="city" id="city" value="{{ $edit_contact_info[0]->city }}" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>State</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="state" id="state" value="{{ $edit_contact_info[0]->state }}" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Country</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="country" id="country" value="{{ $edit_contact_info[0]->country }}" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Nationality</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="nationality" id="nationality" value="{{ $edit_contact_info[0]->nationality }}" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>ZIP</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="zip" id="zip" value="{{ $edit_contact_info[0]->zip }}" required /></p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="columnEdit">
                            <table>
                                <tr>
                                    <td>
                                        <p>Date Of Birth</p>
                                    </td>
                                    <td>
                                        <p>: <input type="date" data-date-inline-picker="true" name="dob" id="dob" value="{{ $edit_contact_info[0]->dob }}" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>personal_number</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="personal_number" id="personal_number" value="{{ $edit_contact_info[0]->personal_number }}" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>whatsapp_number</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="whatsapp_number" id="whatsapp_number" value="{{ $edit_contact_info[0]->whatsapp_number }}" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>skype</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="skype" id="skype" value="{{ $edit_contact_info[0]->skype }}" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>email_id</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="email_id" id="email_id" value="{{ $edit_contact_info[0]->email_id }}" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>website</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="website" id="website" value="{{ $edit_contact_info[0]->website }}" required /></p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <button type="submit" name="edit_contact_info">Update Info </button>
                </form>
            </div>
            @else
            <button type="button" class="collapsible">
                <h2 style='text-align:center; font-size: 2vw;color: white;'>Contact info</h2>
            </button>
            <div class="content">
                <h2 style='text-align:center;font-size: 1vw;'> details not found </h2>
            </div>
            @endif

            <!--  Hire Me -->
            <hr />
            @if(isset($edit_hire_me))
            <button type="button" class="collapsible">
                <h2 style='text-align:center; font-size: 2vw;color: white;'>Hire Me</h2>
            </button>
            <div class="content">
                <br />
                <button type="button" id="addHireMe" name="add_button">Add </button>
                <form id="addHireMeForm" name="addHireMeForm" method="POST" style="display:none;" action="addHireMe">
                    {{ csrf_field() }}
                    <input name="jobDesc" placeholder="Job Description" required />
                    <input name="jobRate" placeholder="Job Rate" required />
                    <select name="jobType" required>
                        <option value="" selected>Select the Job type</option>
                        <option value="B">Basic</option>
                        <option value="I">Intermediate</option>
                        <option value="A">Advanced</option>
                    </select>
                    </br />
                    <button type="submit" name="add_HireMe">Submit</button>
                    <button type="button" id="cancelHireMe" name="cancel_HireMe">Cancel</button>
                </form>
                <form name="hireMeForm" method="GET" onsubmit="return validateHireMeInfo();" action="updateHireMe">
                    {{ csrf_field() }}
                    <div class="row">
                        @foreach($edit_hire_me as $hire_me)
                        <div class="columnEdit">
                            <table style="border-spacing: 0;">
                                <tr>
                                    <td>
                                        <input type="hidden" name="job_id" value="{{ $hire_me->job_id }}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Job Description</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="job_description" value="{{ $hire_me->job_description }}" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Job Rate</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="job_rate" value="{{ $hire_me->job_rate }}" onChange="callThis();" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Active</p>
                                    </td>
                                    <td>
                                        <p>: <select id="status" name="Active">
                                                @if($hire_me->Active === 'Y')
                                                <option value="Y" selected>Yes</option>
                                                <option value="N">NO</option>
                                                @else
                                                <option value="N" selected>NO</option>
                                                <option value="Y">Yes</option>
                                                @endif
                                            </select>
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <hr style="border-top:1px dotted #000;" />
                        </div>
                        @endforeach
                    </div>
                    <button type="submit" name="edit_hire_me">Update info</button>
                </form>
            </div>
            @else
            <button type="button" class="collapsible">
                <h2 style='text-align:center; font-size: 2vw;color: white;'>Hire Me</h2>
            </button>
            <div class="content">
                <h2 style='text-align:center;font-size: 1vw;'> details not found </h2>
            </div>
            @endif

            <!--  Job Seeker -->
            <hr />
            @if(isset($edit_job_seeker))
            <button type="button" class="collapsible">
                <h2 style='text-align:center; font-size: 2vw;color: white;'>Job Seeker</h2>
            </button>
            <div class="content">
                <form name='jobSeekerForm' method='post' action="updateJobSeeker">
                    {{ csrf_field() }}
                    <div class='row'>
                        <div class='columnEdit'>
                            <p>Designation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='textbox' name='designation' value='{{ $edit_job_seeker[0]->designation }}' required /></p>
                            <p>Professional Summary&nbsp;&nbsp;: <textarea rows='6' style='width:200%; font-size:0.9vw;' name="professional_summary" required>{{ $edit_job_seeker[0]->professional_summary }}</textarea></p>
                        </div>
                    </div>
                    <button type="submit" name="edit_job_seeker">Update info</button>
                </form>
            </div>
            @else
            <button type="button" class="collapsible">
                <h2 style='text-align:center; font-size: 2vw;color: white;'>Job Seeker</h2>
            </button>
            <div class="content">
                <h2 style='text-align:center;font-size: 1vw;'> details not found </h2>
            </div>
            @endif

            <!--  References -->
            <hr />
            @if(isset($edit_references))
            <button type="button" class="collapsible">
                <h2 style='text-align:center; font-size: 2vw;color: white;'>References</h2>
            </button>
            <div class="content">
                <br />
                <button type="button" id="addReference" name="add_button">Add</button>
                <form id="addReferenceForm" name="addReferenceForm" method="POST" style="display:none;" enctype="multipart/form-data" action="addReference">
                    {{ @csrf_field() }}
                    <input name="referrer" placeholder="Referrer Name" required />
                    <input name="designation" placeholder="Designation" required />
                    <textarea name="reference" rows="4" placeholder="Reference" required></textarea>
                    </br />
                    <input type="file" name="file" id="file" required>
                    <button type="submit" name="add_Reference">Submit</button>
                    <button type="button" id="cancelReference" name="cancel_Reference">Cancel</button>
                </form>
                <form name='referenceForm' method='GET' action="updateReference">
                    {{ csrf_field() }}
                    <div class='row'>
                        <div class='columnEdit'>
                            @foreach($edit_references as $reference)
                            <table style="border-spacing: 0;">
                                <input type='hidden' name='reference_id' value='{{ $reference->reference_id }}' />
                                <tr>
                                    <td>
                                        <p>Referrer</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="referrer" value="{{ $reference->referrer }}" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Designation</p>
                                    </td>
                                    <td>
                                        <p>: <input type="textbox" name="designation" value="{{ $reference->referrer_designation }}" required /></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>reference</p>
                                    </td>
                                    <td>
                                        <p><textarea rows='6' style='width:20vw; font-size:0.9vw' name="reference_given" required>{{ $reference->reference }}</textarea></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Display </p>
                                    </td>
                                    <td>
                                        <p>: <select id="status" name="display">
                                                @if($reference-> display === 'Y')
                                                <option value="Y" selected>Yes</option>
                                                <option value="N">NO</option>
                                                @else
                                                <option value="N" selected>NO</option>
                                                <option value="Y">Yes</option>
                                                @endif
                                            </select>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            @endforeach
                            <hr style="border-top:1px dotted #000;" />
                        </div>
                    </div>
                    <button type="submit" name="edit_references">Update info</button>
                </form>
            </div>
            @else
            <button type="button" class="collapsible">
                <h2 style='text-align:center; font-size: 2vw;color: white;'>References</h2>
            </button>
            <div class="content">
                <h2 style='text-align:center;font-size: 1vw;'> details not found </h2>
            </div>
            @endif



            <!--  Resume -->
            <hr />
            @if(isset($edit_resumes))
            <button type="button" class="collapsible">
                <h2 style='text-align:center; font-size: 2vw;color: white;'>Resumes</h2>
            </button>
            <div class="content">
                <br />
                <button type="button" id="addResume" name="add_button">Add</button>
                <form id="addResumeForm" name="addResumeForm" method="POST" style="display:none;" action="addResume">
                    {{ @csrf_field() }}
                    <input name="year" placeholder="Year" required />
                    <input name="company" placeholder="Company Name" required />
                    <input name="designation" placeholder="Designation" required />
                    </br />
                    <textarea name="responsibilities" rows="4" placeholder="Responsibilities" required></textarea>
                    <button type="submit" name="add_Resume">Submit</button>
                    <button type="button" id="cancelResume" name="cancel_button">Cancel</button>
                </form>
                <form name='resumesForm' method='GET' action="updateResume">
                    {{ csrf_field() }}
                    <div class='row'>
                        @foreach($edit_resumes as $resume)
                        <div class='columnEdit'>
                            <table>
                                <input type="hidden" value='{{ $resume->resume_id }}' name="resume_id" />
                                <tr>
                                    <td>Year</td>
                                    <td>: <input type=' text' name='year' value='{{ $resume->year }}' required /></td>
                                </tr>
                                <tr>
                                    <td>Company</td>
                                    <td>: <input type='textbox' name='company' value='{{ $resume->company }}' required /></td>
                                </tr>
                                <tr>
                                    <td>Designation</td>
                                    <td>: <input type='textbox' name='designation' value='{{ $resume->designation }}' required /></td>
                                </tr>
                                <tr>
                                    <td>Responsibilities</td>
                                    <td>: <textarea rows='6' style='width:80%; font-size:0.9vw;' name="responsibilities" required>{{ $resume->responsibilities }}</textarea></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Display </p>
                                    </td>
                                    <td>
                                        <p>: <select id="status" name="display">
                                                @if($resume->display === 'Y')
                                                <option value="Y" selected>Yes</option>
                                                <option value="N">NO</option>
                                                @else
                                                <option value="N" selected>NO</option>
                                                <option value="Y">Yes</option>
                                                @endif
                                            </select>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            <hr style="border-top:1px dotted #000;" />
                        </div>
                        @endforeach
                    </div>
                    <button type="submit" name="edit_resumes">Update info</button>
                </form>
            </div>
            @else
            <button type="button" class="collapsible">
                <h2 style='text-align:center; font-size: 2vw;color: white;'>Resumes</h2>
            </button>
            <div class="content">
                <h2 style='text-align:center;font-size: 1vw;'> details not found </h2>
            </div>
            @endif

            <!--  Skills -->
            <hr />
            <button type="button" class="collapsible">
                <h2 style='text-align:center; font-size: 2vw;color: white;'>Skills</h2>
            </button>
            @if(isset($edit_skills))
            <div class="content">
                <br />
                <button type="button" id="addSkill" name="add_button">Add</button>
                <form id="addSkillForm" name="addSkillForm" method="POST" style="display:none;" action="addSkill">
                    {{ @csrf_field() }}
                    <input name="skillName" placeholder="Skill Name" required />
                    <input name="knowledge" placeholder="knowledge" required />
                    <select name="jobType" required>
                        <option value="" selected>Select skill type</option>
                        <option value="L">Language Skills</option>
                        <option value="M">MARKETABLE SKILLS</option>
                        <option value="T">TRANSFERABLE SKILLS</option>
                    </select>
                    </br />
                    <button type="submit" name="add_Skill">Submit</button>
                    <button type="button" id="cancelSkill" name="cancel_button">Cancel</button>
                </form>
                <form name='skillsForm' method='GET' action="updateSkill">
                    {{ csrf_field() }}
                    <div class='row'>
                        @foreach($edit_skills as $skill)
                        <div class='columnEdit'>
                            <table>
                                <input type="hidden" value='{{ $skill->skill_id }}' name="skill_id" />
                                <tr>
                                    <td>Skill Name</td>
                                    <td>: <input type=' text' name='skill_name' value='{{ $skill->skill_name }}' required /></td>
                                </tr>
                                <tr>
                                    <td>Knowledge</td>
                                    <td>: <input type='textbox' name='knowledge' value='{{ $skill->knowledge }}' required /></td>
                                </tr>
                                <tr>
                                    <td>Skill Type</td>
                                    <td>
                                        <p>: <select id="status" name="skill_type">
                                                @if($skill->skill_type === 'L')
                                                <option value="L" selected>Language Skills</option>
                                                <option value="M">MARKETABLE SKILLS</option>
                                                <option value="T">TRANSFERABLE SKILLS</option>
                                                @elseif($skill->skill_type === 'M')
                                                <option value="L">Language Skills</option>
                                                <option value="M" selected>MARKETABLE SKILLS</option>
                                                <option value="T">TRANSFERABLE SKILLS</option>
                                                @else
                                                <option value="L">Language Skills</option>
                                                <option value="M">MARKETABLE SKILLS</option>
                                                <option value="T" selected>TRANSFERABLE SKILLS</option>
                                                @endif
                                            </select>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Active </p>
                                    </td>
                                    <td>
                                        <p>: <select id="status" name="active">
                                                @if($skill->active === 'Y')
                                                <option value="Y" selected>Yes</option>
                                                <option value="N">NO</option>
                                                @else
                                                <option value="N" selected>NO</option>
                                                <option value="Y">Yes</option>
                                                @endif
                                            </select>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            <hr style="border-top:1px dotted #000;" />
                        </div>
                        @endforeach
                    </div>
                    <button type="submit" name="edit_skills ">Update info</button>
                </form>
            </div>
            @else
            <button type="button" class="collapsible">
                <h2 style='text-align:center; font-size: 2vw;color: white;'>Skills</h2>
            </button>
            <div class="content">
                <h2 style='text-align:center;font-size: 1vw;'> details not found </h2>
            </div>
            @endif
        </div>
    </div>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }


        var addHire = document.getElementById('addHireMe');
        var cancelHire = document.getElementById('cancelHireMe');
        addHire.addEventListener('click', function() {
            addHire.style.display = "none";
            document.getElementById('addHireMeForm').style.display = "";
            cancelHire.style.display = "";
        });
        cancelHire.addEventListener('click', function() {
            addHire.style.display = "";
            document.getElementById('addHireMeForm').style.display = "none";
            cancelHire.style.display = "none";
        });


        var addRef = document.getElementById('addReference');
        var cancelRef = document.getElementById('cancelReference');
        addRef.addEventListener('click', function() {
            addRef.style.display = "none";
            document.getElementById('addReferenceForm').style.display = "";
            cancelRef.style.display = "";
        });
        cancelRef.addEventListener('click', function() {
            addRef.style.display = "";
            document.getElementById('addReferenceForm').style.display = "none";
            cancelRef.style.display = "none";
        });

        var addRes = document.getElementById('addResume');
        var cancelRes = document.getElementById('cancelResume');
        addRes.addEventListener('click', function() {
            addRes.style.display = "none";
            document.getElementById('addResumeForm').style.display = "";
            cancelRes.style.display = "";
        });
        cancelRes.addEventListener('click', function() {
            addRes.style.display = "";
            document.getElementById('addResumeForm').style.display = "none";
            cancelRes.style.display = "none";
        });


        var addSkills = document.getElementById('addSkill');
        var cancelSkills = document.getElementById('cancelSkill');
        addSkills.addEventListener('click', function() {
            addSkills.style.display = "none";
            document.getElementById('addSkillForm').style.display = "";
            cancelSkills.style.display = "";
        });
        cancelSkills.addEventListener('click', function() {
            addSkills.style.display = "";
            document.getElementById('addSkillForm').style.display = "none";
            cancelSkills.style.display = "none";
        });
    </script>
</body>

</HTML>