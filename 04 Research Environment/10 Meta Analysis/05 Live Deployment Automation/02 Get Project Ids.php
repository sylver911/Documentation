<p>To automate live deployments for multiple projects, <a href='/docs/v2/cloud-platform/projects/getting-started#08-Create-Project-Directories'>save the projects under a single directory</a> in QuantConnect Cloud. This tutorial assumes you save all the projects under a <code>/Live</code> directory.</p>

<p>Follow the below steps to get the project Ids of all projects under the <code>/Live</code> directory:</p>
<ol>
<?
$additionalImports = "";
include(DOCS_RESOURCES."/datasets/research-environment/load-csharp-assemblies.php");
?>

    <li>Call the <code>list_projects</code> method to get a list of all project responses.</li>
    <div class="section-example-container">
        <pre class="python">list_project_response = api.list_projects()</pre>
        <pre class="csharp">var listProjectResponse = api.ListProjects();</pre>
    </div>

    <li>Obtain the project Ids for the projects in <code>/Live</code> directory.</li>
    <div class="section-example-container">
        <pre class="python">project_ids = [
    project.project_id for project in list_project_response.projects
    if project.name.split("/")[0] == "Live"
]</pre>
        <pre class="csharp">var projectIds = listProjectResponse.Projects
            .Where(project =&gt; project.Name.Split('/').First() == "Live")
            .Select(project =&gt; project.ProjectId)
            .ToList();</pre>
    </div>
</ol>
