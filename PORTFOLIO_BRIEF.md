# Portfolio redesign brief for Codex

## Context from the ChatGPT project

- Project name: تخطيط وتنفيذ عملي المستقل (planning and executing my independent work).
- The owner wants to redesign their existing portfolio using Codex and include the projects, experience, and areas of expertise missing from the current version.
- Earlier conversation references CV files for Salah Bakhash. The latest referenced revisions are `Salah_Bakhash_CV_Fixed.pdf` and `Salah_Bakhash_CV_Fixed.docx`. Their contents were unavailable when this brief was written. Use the version supplied by the owner and confirm the display name and wording against it.
- The owner provided the live portfolio at https://salahbakhash.com/. The site was reviewed on 10 November 2026. The source repository and latest CV are still needed for implementation and a complete coverage audit.

## Inputs

1. The existing portfolio source (repository, local folder, or export). Compare it with the live homepage and project route below.
2. The latest CV and any supplied project notes, links, screenshots, or relevant excerpts from ChatGPT. Include projects the owner wants represented even if they have no public link.
3. Any supplied preferences about audience, language, positioning, and contact details. If the audience is unspecified, start with prospective freelance clients as a working assumption.

Keep raw CVs, private chat excerpts, and unpublished evidence outside the site's public directories and any public repository. Use public-facing details and assets the owner has supplied for portfolio use.

## Live portfolio baseline

Sources: [Homepage](https://salahbakhash.com/), [portfolio route](https://salahbakhash.com/en/portfolio), and the indexed [Mostaql profile](https://mostaql.com/u/salah_bakhash/projects) linked by the site via its review page. Site statements are a baseline and should be reconciled with the latest CV.

| Area | Already visible | Redesign opportunity |
| --- | --- | --- |
| Positioning | Web Developer in the hero, Full-Stack Developer in About. Personal sites, e-commerce, and landing pages are mentioned. | Lead with the kinds of client problems Salah solves, with examples from custom web development, CMS work, and workflow automation. |
| Featured projects | Six screenshot tiles appeared in the desktop gallery. The cards lack visible text labels or summaries. | Confirm project names, owner contributions, and publication status. Give every card a title and summary, and link to case studies for the work that has enough evidence. |
| HashNet | Listed from 2023 to present. The site mentions a modular PHP/MySQL CMS, building or maintaining WordPress sites, and support. | Develop the CMS into a case study candidate. Treat WordPress builds, maintenance, and support as expertise backed by the role. Confirm current dates and what can be shown publicly. |
| DXN Taksim | Listed for 2022–2023. The site describes a billing points tool, other process automation, and digitizing daily accounting. | Capture the billing and accounting tools as separate inventory entries. Confirm the relationship between them, the owner's contribution, and any documented outcomes. |
| Freelancing | Listed from 2019 to present. About displays 15 projects, while the experience section says over 21 web projects and more than 13 paid freelance projects. The site links to Mostaql reviews. | Reconcile the scope and date of each number against the inventory. Use a single defined figure or clearly label separate counts. |
| Expertise | Laravel, PHP, MySQL, jQuery, React, Next.js, SvelteKit, React Native, GitHub, Python, Firebase, Node.js, Apache, and WordPress appear in the skills or experience sections. Earlier graphic design and video editing are mentioned. | Organize skills by capability and link each group to evidence. The indexed Mostaql profile also lists Dart, Flutter, Bootstrap, and Tailwind. Verify depth and relevance against actual projects before adding them. |
| Contact and CV | The site offers a contact form, email, WhatsApp, phone, and a public CV link at `/media/salah-cv.pdf`. | Confirm the preferred contact action and approved public CV. Verify the contact flow and legacy CV route in the implementation. |

The highest-priority case study candidates from the existing site are the HashNet CMS and the DXN Taksim automation work. Both are already mentioned in Experience. The gallery audit and these leads do not establish the complete set of missing projects.

## Audit and content inventory

- Read the repository instructions. Inspect the existing site structure, content, assets, routes, and build commands. Use the existing stack where practical.
- Compare the current portfolio with the CV and project material. Track every supplied project, role, and expertise area in a coverage table with its source, current coverage, proposed placement, and any open facts. Reconcile duplicates. Record what was included, grouped, or held for clarification so omissions are visible.
- For each project, capture the problem, the owner's role and individual contribution, the work delivered, the outcome if substantiated, and any public links or visuals. Distinguish client, employment, independent, and in-progress work when the sources establish the distinction.
- Group expertise by the work the owner can do, and tie each area to a project or role that demonstrates it. Use specific claims grounded in the supplied material. Keep ambiguous details in the private inventory until confirmed.

## Design and implementation

- Give the homepage a clear statement of who the owner helps and what they do, followed by featured projects, expertise, experience, and an easy way to get in touch. Put the rest of the verified projects in a complete project index.
- Use concise case studies for projects with enough material and shorter entries for the rest. Use a consistent visual hierarchy and authentic project images where available.
- Make the site responsive and usable by keyboard. Check focus states, contrast, headings, and image descriptions. Preserve existing public links or provide redirects for changed routes where the platform supports them.
- Implement the redesign in the supplied source. Run the available build and checks, review desktop and mobile layouts, and verify navigation, case study routes, contact links, and any CV download. Provide a preview and the coverage table for review before publishing.

## Starter message to paste into Codex

> Read PORTFOLIO_BRIEF.md and the repository's applicable instructions. Use the existing portfolio and the CV and project material I provide to build a coverage table, then implement the redesign and verify it. Include every verified project and area of expertise suitable for public display. Flag missing evidence or publication details in the review notes. Give me a preview and a summary of what was added.
