<?php

namespace App\Nova\Metrics;

use App\Models\User;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Value;

class NewUsers extends Value
{
    /**
     * Get the displayable name of the metric.
     *
     * @return string
     */
    public function name()
    {
        return __('nova.metrics.names.new_users');
    }

    /**
     * Calculate the value of the metric.
     *
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        return $this->count($request, User::class);
    }

    /**
     * Get the ranges available for the metric.
     *
     * @return array
     */
    public function ranges()
    {
        return [
            30 => __('nova.metrics.options.new_users.30_days'),
            60 => __('nova.metrics.options.new_users.60_days'),
            365 => __('nova.metrics.options.new_users.365_days'),
            'TODAY' => __('nova.metrics.options.new_users.today'),
            'MTD' => __('nova.metrics.options.new_users.month_to_date'),
            'QTD' => __('nova.metrics.options.new_users.quarter_to_date'),
            'YTD' => __('nova.metrics.options.new_users.year_to_date'),
        ];
    }

    /**
     * Determine for how many minutes the metric should be cached.
     *
     * @return \DateInterval|\DateTimeInterface|float|int
     */
    public function cacheFor()
    {
        return now()->addMinutes(5);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'new-users';
    }
}
