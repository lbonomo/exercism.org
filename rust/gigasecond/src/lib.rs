use time::PrimitiveDateTime as DateTime;
use time::Duration;

// Returns a DateTime one billion seconds after start.
pub fn after(start: DateTime) -> DateTime {
    // unimplemented!("What time is a gigasecond later than {start}");

    // Add gigasecond
    let end = start + Duration::seconds(1_000_000_000);
    return end
}
