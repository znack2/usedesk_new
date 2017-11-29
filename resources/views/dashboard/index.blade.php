@extends('user.layouts.main')

@set('title', trans('text.dashboard'))

@section('title')
    {{ $title }}
@stop

@section('body')
    @include('user.include.breadcrumbs', [
          'breadcrumbs' => [
              ['href' => '', 'title' =>  $title]
          ]
      ])
    <div class="mail-env">
        <div class="mail-body" style="width: 100%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">{{ trans('text.new_unsigned_tickets') }}</div>
                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    </div>
                </div>
                <div class="panel-body with-table">
                    <table class="table mail-table">
                        <thead>
                        <tr>
                            <th width="5%">{{ trans('text.status') }}</th>
                            <th>{{ trans('text.client') }}</th>
                            <th>{{ trans('text.subject') }}</th>
                            <th colspan="2">
                                <div class="mail-pagination" colspan="2">
                                    <strong>{{ $ticketPaginator->getFrom() }}-{{ $ticketPaginator->getTo() }}</strong>
                                    <span>{{ trans('text._of') }} {{ $ticketPaginator->getTotal() }}</span>
                                    <div class="btn-group">
                                        <a href="{{ $ticketPaginator->getUrl($ticketPaginator->getCurrentPage() > 1 ? $ticketPaginator->getCurrentPage() - 1 : $ticketPaginator->getCurrentPage()) }}"
                                           class="btn btn-sm btn-white {{ $ticketPaginator->getCurrentPage() <= 1 ? 'disabled' : '' }}"><i
                                                    class="entypo-left-open"></i></a>
                                        <a href="{{ $ticketPaginator->getUrl($ticketPaginator->getCurrentPage() <= $ticketPaginator->getLastPage() || !$ticketPaginator->getLastPage() ? $ticketPaginator->getCurrentPage() + 1 : $ticketPaginator->getCurrentPage()) }}"
                                           class="btn btn-sm btn-white {{ $ticketPaginator->getCurrentPage() >= $ticketPaginator->getLastPage() || !$ticketPaginator->getLastPage() ? 'disabled' : '' }}"><i
                                                    class="entypo-right-open"></i></a>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ticketPaginator as $ticket)
                            <tr class="{{ $ticket->hasUpdates() ? 'unread' : '' }}">
                                <td class="col-status"
                                    onclick="location.href='{{ route('user.tickets.get_details', ['id' => $ticket->id]) }}'"
                                    style="cursor: pointer;">
                                    @include('user.tickets.include.status')
                                </td>
                                <td class="col-name"
                                    onclick="location.href='{{ route('user.tickets.get_details', ['id' => $ticket->id]) }}'"
                                    style="cursor: pointer;">
                                    <a href="{{ route('user.tickets.get_details', ['id' => $ticket->id]) }}"
                                       style="display: block; max-width:150px;  overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"
                                       class="col-name">{{ $ticket->client->name }}</a>
                                </td>
                                <td class="col-subject"
                                    onclick="location.href='{{ route('user.tickets.get_details', ['id' => $ticket->id]) }}'"
                                    style="cursor: pointer;">
                                    @if($ticket->channel == 'facebook')
                                        <span class="entypo-facebook ticket-facebook-icon"></span>
                                    @endif
                                    @if($ticket->channel == 'twitter-mention' || $ticket->channel == 'twitter-direct')
                                            <span class="entypo-twitter ticket-facebook-icon"></span>
                                    @endif
                                    @if($ticket->channel == 'vk')
                                            <span class="entypo-vkontakte ticket-facebook-icon"></span>
                                    @endif
                                    @if($ticket->channel == 'email')
                                        <span class="entypo-mail ticket-facebook-icon"></span>
                                    @endif
                                    @if($ticket->channel == 'chat' || $ticket->channel == Ticket::USEDESK_CHAT)
                                        <span class="entypo-chat ticket-facebook-icon"></span>
                                    @endif
                                    @if($ticket->channel == Ticket::CHANNEL_TELEPHONY)
                                        <span class="entypo-phone ticket-facebook-icon"></span>
                                    @endif
                                    @if($ticket->channel == 'api')
                                        <span class="entypo-shareable ticket-facebook-icon"></span>
                                    @endif
                                    @if($ticket->channel == Ticket::CHANNEL_WHATSHELP)
                                        <span class="fa fa-comments ticket-facebook-icon"></span>
                                    @endif
                                    <a class="subj-link" href="{{ route('user.tickets.get_details', ['id' => $ticket->id]) }}"
                                       style="position: relative; top: 2px; display: block; max-width:200px;  overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                                        {{ $ticket->subject }}
                                        @foreach($ticket->tags as $tag)
                                            <span class="label label-default">{{ $tag->name }}</span>
                                        @endforeach
                                    </a>
                                </td>
                                <td class="col-options"
                                    onclick="location.href='{{ route('user.tickets.get_details', ['id' => $ticket->id]) }}'"
                                    style="cursor: pointer;">
                                    @if($ticket->assignee)
                                        <a href="{{ route('user.users.get_edit', ['id' => $ticket->assignee->id]) }}">{{ $ticket->assignee->name }}</a>
                                    @endif
                                </td>
                                <td class="col-time"
                                    onclick="location.href='{{ route('user.tickets.get_details', ['id' => $ticket->id]) }}'"
                                    style="cursor: pointer;">{{ TimeHelper::timeOutput($ticket->last_updated_at) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(function () {
            $('.subj-link').each(function () {
                var currentWidth = $(this).width();
                var parentWidth = $(this).parent().width() - 20;
                if (parentWidth != currentWidth) {
                    $(this).css('max-width', parentWidth);
                }
            });
        });
    </script>
@stop