<section id="about">
    <div style="position:relative;">
<link href="/css/about-this-website.css" rel="stylesheet" type="text/css">

        <div class="container">
            <h2 id="dashboard" class="about-title" style="text-align:left;"><span class="about-heading-highlight">Overview of B.C. Public School Data</span></h2>
        </div>
        <div class="container">
            <div class="row frontPage-charts justify-content-center">
                <div id="stp" style="display:block" class="col-md-8">
                    <iframe scrolling="no" height="535px" id="homeFrameId-6" class="tableau-embed"
                    src='//public.tableau.com/views/ESDR_PROVINCE/12_STP_P?:showVizHome=no&amp;:display_share=no&amp;:embed=true&amp;:toolbar=no&amp;:device=desktop&amp;'
                    style='border:none'></iframe>
                <div style="background:white;margin-top: -49px;position:absolute;height: 27px;width: 100%;"></div>
            </div>
            <div id="enrollment-info" style="display: none" class="col-md-8">
                <iframe scrolling="no" height="535px" id="homeFrameId-1" class="tableau-embed"
                    src="//public.tableau.com/views/ESDR_PROVINCE/2_Enrolment_P?:showVizHome=no&amp;:display_share=no&amp;:embed=true&amp;:toolbar=no&amp;:device=desktop&amp;"></iframe>
                <div style="background:white;margin-top: -49px;position:absolute;height: 27px;width: 100%;"></div>
            </div>
            <div id="completion-rate" style="display:none" class="col-md-8">
                <iframe scrolling="no" height="535px" id="homeFrameId-2" class="tableau-embed"
                    src="//public.tableau.com/views/ESDR_PROVINCE/5_CompRate_P?:showVizHome=no&amp;:display_share=no&amp;:embed=true&amp;:toolbar=no&amp;:device=desktop&amp;"></iframe>
                <div style="background:white;margin-top: -49px;position:absolute;height: 27px;width: 100%;"></div>
            </div>
            <div id="grade-4-7-fsa" style="display:none" class="col-md-8">
                <iframe scrolling="no" height="535px" id="homeFrameId-3" class="tableau-embed"
                    src="//public.tableau.com/views/ESDR_PROVINCE/P_7_FSA_P?:showVizHome=no&amp;:display_share=no&amp;:embed=true&amp;:toolbar=no&amp;:device=desktop&amp;"></iframe>
                <div style="background:white;margin-top: -49px;position:absolute;height: 27px;width: 100%;"></div>
            </div>
            <div id="provincial-assessments" style="display:none" class="col-md-8">
                <iframe scrolling="no" height="535px" id="homeFrameId-4" class="tableau-embed"
                    src="//public.tableau.com/views/ESDR_PROVINCE/13_Assessments_P?:showVizHome=no&amp;:display_share=no&amp;:embed=true&amp;:toolbar=no&amp;:device=desktop&amp;"></iframe>
                <div style="background:white;margin-top: -49px;position:absolute;height: 27px;width: 100%;"></div>
            </div>
            <div id="students-satisfaction-survey" style="display:none" class="col-md-8">
                <iframe scrolling="no" height="535px" id="homeFrameId-5" class="tableau-embed"
                    src="//public.tableau.com/views/ESDR_PROVINCE/11_SatSurv_P?:showVizHome=no&amp;:display_share=no&amp;:embed=true&amp;:toolbar=no&amp;:device=desktop&amp;"></iframe>
                <div style="background:white;margin-top: -49px;position:absolute;height: 27px;width: 100%;"></div>
            </div>

            <div class="col-md-2 frontPage-radio" style="margin-top:67px;">
                <ul style="display: inline-block;">
                    <li style="list-style: none;"><input type="radio" onclick="javascript:yesnoCheck();" name="yesno"
                            id="stp-check" checked="checked"> Post-Secondary <br><span
                            style="margin-left: 16px;">Transitions</span></li>
                    <li style="list-style: none;"><input type="radio" onclick="javascript:yesnoCheck();" name="yesno"
                            id="enrollment-info-check"> Enrolment</li>
                    <li style="list-style: none;"><input type="radio" onclick="javascript:yesnoCheck();" name="yesno"
                            id="completion-rate-check"> Completion Rate</li>
                    <li style="list-style: none;"><input type="radio" onclick="javascript:yesnoCheck();" name="yesno"
                            id="grade-4-7-fsa-check"> Foundation Skills <br><span
                            style="margin-left: 16px;">Assessment</span></li>
                    <li style="list-style: none;"><input type="radio" onclick="javascript:yesnoCheck();" name="yesno"
                            id="provincial-assessments-check"> Graduation Assessment</li>
                    <li style="list-style: none;"><input type="radio" onclick="javascript:yesnoCheck();" name="yesno"
                            id="students-satisfaction-survey-check"> Students Learning Survey</li>

                </ul>
            </div>
        </div>
        </div>
        <!-- </div> -->
    </div>

    <div class="container" style="position: relative;"><a class="btn btn-primary btn-lg" href="/reporting">LEARN MORE
            +</a></div>
    <script type="text/javascript">
        // Define the yesnoCheck function outside window.onload
        function yesnoCheck() {
            const mappings = [{
                    checkId: 'enrollment-info-check',
                    contentId: 'enrollment-info'
                },
                {
                    checkId: 'completion-rate-check',
                    contentId: 'completion-rate'
                },
                {
                    checkId: 'grade-4-7-fsa-check',
                    contentId: 'grade-4-7-fsa'
                },
                {
                    checkId: 'provincial-assessments-check',
                    contentId: 'provincial-assessments'
                },
                {
                    checkId: 'students-satisfaction-survey-check',
                    contentId: 'students-satisfaction-survey'
                },
                {
                    checkId: 'stp-check',
                    contentId: 'stp'
                },
            ];

            mappings.forEach(({
                checkId,
                contentId
            }) => {
                const checkbox = document.getElementById(checkId);
                const content = document.getElementById(contentId);
                if (checkbox && content) {
                    content.style.display = checkbox.checked ? 'block' : 'none';
                } else {
                    console.error(`Element with ID "${checkId}" or "${contentId}" not found.`);
                }
            });
        }

        // Wrap the function in window.onload
        window.onload = function() {
            // Call yesnoCheck on page load
            yesnoCheck();

            // Attach yesnoCheck to checkbox change events
            document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                checkbox.addEventListener('change', yesnoCheck);
            });
        };
    </script>
    <script type="text/javascript">
        window.onload = function() {
            let myiFrame = document.getElementById("homeFrameId-6");

            if (myiFrame) {
                myiFrame.onload = function() { // Ensure iframe content is fully loaded
                    let doc = myiFrame.contentDocument;

                    if (doc && doc.body) {
                        doc.body.innerHTML +=
                            '<style>.tab-toolbar.public.tab-fill.tab-widget {background: blue;}</style>';
                    } else {
                        console.error("Iframe document or body is not accessible.");
                    }
                };
            } else {
                console.error("Iframe with ID 'homeFrameId-6' not found.");
            }

        };
    </script>
</section>