# Sycamore
SLT Custom WP Theme.

Run locally with Apache + MySQL or MAMP.

#### CSS
```bash
sass --watch scss: --style compressed
```
<br/><br/>
### ACF Additions
1. Give - Kroger & Amazon
  - Heading       | give_ka_heading     | Text
  - Text          | give_ka_text        | TextArea
  - Kroger Logo   | give_ka_kroger_logo | Image
  - Amazon Logo   | give_ka_amazon_logo | Image
2. Explore - Directory
  - Directory | explore_directory | Repeater
3. Explore - Directory Less
  - Directory | explore_directory_less | Repeater
4. Bulletin Board - Events: Single Post
  - Location                | bb_event_location           | Radio Button
  - Nature Preserve Link    | bb_event_internal_location  | Page Link
  - External Link Title     | bb_event_external_title     | Text
  - External Link Location  | bb_event_external_location  | URL
  - Date                    | bb_event_date               | Date Picker
  - Facebook Event URL      | bb_event_facebook_event_url | URL
  - RSVP                    | bb_event_rsvp               | URL
  - Time Start              | bb_event_time_start         | Time Picker
  - Time End                | bb_event_time_end           | Time Picker
  
- For Nature Preserve Link
  - Filter By Post Type: Preserve
  - Conditional Logic: Show this field if
    - Location value is equal to Nature Preserve Internal Link
- For External Location Link/Title
  - Conditional Logic: Show this field if
    - Location value is equal to External Link
