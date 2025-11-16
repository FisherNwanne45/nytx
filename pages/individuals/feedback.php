<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>Feedback</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/contact/feedback.php">Contact</a> &rsaquo;
                Feedback
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Share Your Feedback</h3>
            <p>Your feedback is essential for improving our research, data services, and user experience. We value your
                insights and use them to enhance our platform and better serve the international trade research
                community.</p>
        </div>

        <div class="content-section">
            <h3>Feedback Categories</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Website Experience</h4>
                    </div>
                    <div class="card-body">
                        <p>Help us improve navigation, design, and functionality</p>
                        <ul>
                            <li>User interface and design</li>
                            <li>Navigation and ease of use</li>
                            <li>Mobile experience</li>
                            <li>Accessibility features</li>
                            <li>Loading speed and performance</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Research Content</h4>
                    </div>
                    <div class="card-body">
                        <p>Share thoughts on our publications and analysis</p>
                        <ul>
                            <li>Research quality and depth</li>
                            <li>Topic relevance and coverage</li>
                            <li>Clarity and presentation</li>
                            <li>Methodology transparency</li>
                            <li>Timeliness of research</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Data Services</h4>
                    </div>
                    <div class="card-body">
                        <p>Provide input on our data offerings and tools</p>
                        <ul>
                            <li>Data accuracy and reliability</li>
                            <li>Dataset completeness</li>
                            <li>Download formats and options</li>
                            <li>Documentation quality</li>
                            <li>Analysis tools and visualization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Feedback Form</h3>
            <div style="background: var(--light-blue); padding: 30px; border-radius: 8px; margin: 20px 0;">
                <form action="#" method="POST" style="display: grid; gap: 20px;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                        <div>
                            <label for="feedbackName"
                                style="display: block; margin-bottom: 5px; font-weight: bold;">Your Name</label>
                            <input type="text" id="feedbackName" name="feedbackName"
                                style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                        <div>
                            <label for="feedbackEmail"
                                style="display: block; margin-bottom: 5px; font-weight: bold;">Email Address</label>
                            <input type="email" id="feedbackEmail" name="feedbackEmail"
                                style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                    </div>

                    <div>
                        <label for="feedbackCategory"
                            style="display: block; margin-bottom: 5px; font-weight: bold;">Feedback Category *</label>
                        <select id="feedbackCategory" name="feedbackCategory" required
                            style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                            <option value="">Select a category</option>
                            <option value="website">Website Experience</option>
                            <option value="research">Research Content</option>
                            <option value="data">Data Services</option>
                            <option value="education">Educational Resources</option>
                            <option value="general">General Feedback</option>
                            <option value="bug">Bug Report</option>
                            <option value="suggestion">Feature Suggestion</option>
                        </select>
                    </div>

                    <div>
                        <label for="feedbackPage"
                            style="display: block; margin-bottom: 5px; font-weight: bold;">Specific Page or Feature (if
                            applicable)</label>
                        <input type="text" id="feedbackPage" name="feedbackPage"
                            placeholder="e.g., Country Profile page, Data Visualization tool"
                            style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                    </div>

                    <div>
                        <label for="feedbackSubject"
                            style="display: block; margin-bottom: 5px; font-weight: bold;">Subject *</label>
                        <input type="text" id="feedbackSubject" name="feedbackSubject" required
                            style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                    </div>

                    <div>
                        <label for="feedbackMessage" style="display: block; margin-bottom: 5px; font-weight: bold;">Your
                            Feedback *</label>
                        <textarea id="feedbackMessage" name="feedbackMessage" required rows="8"
                            placeholder="Please provide detailed feedback, including specific examples when possible..."
                            style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; resize: vertical;"></textarea>
                    </div>

                    <div>
                        <label for="feedbackRating"
                            style="display: block; margin-bottom: 10px; font-weight: bold;">Overall Satisfaction
                            Rating</label>
                        <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                            <label style="display: flex; align-items: center; gap: 5px;">
                                <input type="radio" name="rating" value="5">
                                <span>Excellent</span>
                            </label>
                            <label style="display: flex; align-items: center; gap: 5px;">
                                <input type="radio" name="rating" value="4">
                                <span>Very Good</span>
                            </label>
                            <label style="display: flex; align-items: center; gap: 5px;">
                                <input type="radio" name="rating" value="3">
                                <span>Good</span>
                            </label>
                            <label style="display: flex; align-items: center; gap: 5px;">
                                <input type="radio" name="rating" value="2">
                                <span>Fair</span>
                            </label>
                            <label style="display: flex; align-items: center; gap: 5px;">
                                <input type="radio" name="rating" value="1">
                                <span>Poor</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label style="display: flex; align-items: start; gap: 10px;">
                            <input type="checkbox" name="followup" style="margin-top: 3px;">
                            <span>I'm willing to participate in follow-up research or user testing</span>
                        </label>
                    </div>

                    <div>
                        <label style="display: flex; align-items: start; gap: 10px;">
                            <input type="checkbox" name="acknowledge" required style="margin-top: 3px;">
                            <span>I understand that my feedback may be used to improve <?php echo $acronym; ?> services
                                and may be quoted anonymously in internal reports *</span>
                        </label>
                    </div>

                    <div>
                        <button type="submit"
                            style="background: var(--primary-blue); color: white; padding: 12px 30px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background 0.3s;">
                            Submit Feedback
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="content-section">
            <h3>How We Use Your Feedback</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Feedback Type</th>
                        <th>Review Process</th>
                        <th>Implementation Timeline</th>
                        <th>How We Follow Up</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Website Improvements</td>
                        <td>Monthly review by UX team</td>
                        <td>1-3 months for minor changes, 6-12 months for major updates</td>
                        <td>Email notification when suggestions are implemented</td>
                    </tr>
                    <tr>
                        <td>Content Suggestions</td>
                        <td>Quarterly review by editorial board</td>
                        <td>3-6 months for new research topics</td>
                        <td>Acknowledgement and potential collaboration invitation</td>
                    </tr>
                    <tr>
                        <td>Data Requests</td>
                        <td>Ongoing assessment by data team</td>
                        <td>2-4 months for new datasets, depending on complexity</td>
                        <td>Personal response from data team</td>
                    </tr>
                    <tr>
                        <td>Bug Reports</td>
                        <td>Immediate review by technical team</td>
                        <td>1-7 days for critical issues, 30 days for minor issues</td>
                        <td>Direct communication about resolution</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Recent Improvements Based on User Feedback</h3>
            <div style="background: var(--light-gray); padding: 20px; border-radius: 5px; margin: 20px 0;">
                <h4>Implemented User Suggestions</h4>
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-top: 15px;">
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Enhanced Mobile Experience</strong><br>
                        Improved navigation and data visualization on mobile devices
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Additional Data Export Formats</strong><br>
                        Added JSON and API access based on researcher requests
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Country Comparison Tool</strong><br>
                        New feature allowing side-by-side country analysis
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Research Topic Expansion</strong><br>
                        Added digital trade and sustainability research areas
                    </div>
                </div>
            </div>

            <p>We're committed to continuous improvement and greatly value the insights our users provide. Thank you for
                helping us enhance the <?php echo $acronym; ?> platform for the entire research community.</p>
        </div>

        <div class="content-section">
            <h3>Other Ways to Provide Feedback</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>User Surveys</h4>
                    </div>
                    <div class="card-body">
                        <p>Participate in our periodic user surveys to share broader insights about your experience and
                            needs.</p>
                        <p><strong>Frequency:</strong> Quarterly surveys</p>
                        <p><strong>Duration:</strong> 10-15 minutes</p>
                        <p><strong>Incentives:</strong> Early access to new features</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>User Testing</h4>
                    </div>
                    <div class="card-body">
                        <p>Join our user testing program to provide feedback on new features before public release.</p>
                        <p><strong>Commitment:</strong> 1-2 hours per test</p>
                        <p><strong>Format:</strong> Remote sessions with our UX team</p>
                        <p><strong>Compensation:</strong> Gift cards or premium access</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Research Community</h4>
                    </div>
                    <div class="card-body">
                        <p>Join our research community to participate in discussions and provide ongoing feedback.</p>
                        <p><strong>Platform:</strong> Online forum and working groups</p>
                        <p><strong>Activities:</strong> Topic discussions, methodology reviews</p>
                        <p><strong>Benefits:</strong> Networking, collaboration opportunities</p>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 30px;">
                <p>To participate in these additional feedback opportunities, please indicate your interest in the
                    feedback form above or contact us at <a href="mailto:feedback@<?php echo $urlh; ?>"
                        style="color: var(--primary-blue);">feedback@<?php echo $urlh; ?></a>.</p>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>