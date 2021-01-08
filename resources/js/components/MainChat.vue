<template>
    <div>
        <div class="messages custom-scroll active" id="group_chat">
            <div class="contact-details">
                <div class="row align-items-center">
                    <form class="form-inline search-form">
                        <div class="form-group">
                            <input
                                type="search"
                                class="form-control-plaintext"
                                placeholder="Search.."
                            />
                            <div class="icon-close close-search"></div>
                        </div>
                    </form>
                    <div class="col-md-6">
                        <div class="media left">
                            <div class="media-left mr-3">
                                <div
                                    data-toggle="modal"
                                    data-target="#groupUsersModalCenter"
                                    class="profile online"
                                >
                                    <avatar
                                        :size="60"
                                        :rounded="false"
                                        :username="this.group.name"
                                        src="/theme/assets/images/avtar/teq.jp"
                                    ></avatar>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5 v-text="this.group.name"></h5>
                                <div class="badge badge-success">Active</div>
                            </div>
                            <div class="media-right">
                                <ul>
                                    <li>
                                        <a
                                            class="icon-btn btn-light search search-right"
                                            href="javascript:;"
                                        >
                                            <i data-feather="search"></i
                                        ></a>
                                        <form class="form-inline search-form">
                                            <div class="form-group">
                                                <input
                                                    class="form-control-plaintext"
                                                    type="search"
                                                    placeholder="Search.."
                                                />
                                                <div
                                                    class="icon-close close-search"
                                                ></div>
                                            </div>
                                        </form>
                                    </li>
                                    <li>
                                        <a
                                            class="icon-btn btn-light button-effect mobile-sidebar"
                                            href="javascript:;"
                                            ><i data-feather="chevron-left"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="groupuser justify-content-end">
                            <div class="gr-chat-friend-toggle">
                                <a
                                    data-toggle="modal"
                                    data-target="#inviteUserModalCenter"
                                    class="icon-btn btn-sm pull-right add-grbtn outside"
                                    href="javascript:;"
                                    data-tippy-content="Add User"
                                    ><i data-feather="plus"></i
                                ></a>
                            </div>
                            <div class="">
                                <a
                                    class="icon-btn btn-light button-effect apps-toggle"
                                    href="javascript:;"
                                    data-tippy-content="All Apps"
                                    ><i class="ti-layout-grid2"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-chat">
                <ul class="chatappend">
                    <li
                        :class="{
                            sent: message.user_id != user.id,
                            replies: message.user_id == user.id
                        }"
                        v-for="(message, messageIndex) in messages"
                        :key="messageIndex"
                    >
                        <div class="media">
                            <div class="profile">
                                <avatar
                                    v-if="++messageIndex"
                                    :username="message.user.name"
                                    :size="30"
                                ></avatar>
                            </div>
                            <div class="media-body">
                                <div class="contact-name">
                                    <h5 v-text="message.user.name"></h5>
                                    <h6
                                        v-text="newDate(message.created_at)"
                                    ></h6>
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5 v-text="message.message"></h5>
                                            <div class="msg-dropdown-main">
                                                <a href="javascript:;"
                                                    ><i class="fa fa-trash"></i
                                                ></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="message-input"
            :class="{ 'with-attachment': this.showAttachment }"
        >
            <div class="message-attachment" v-show="showAttachment">
                <Dropzone
                    ref="dzAttachments"
                    id="dropzone"
                    :options="dzOptions"
                    :useCustomSlot="true"
                    @vdropzone-file-added="dzFileAdded"
                    @vdropzone-queue-complete="dzQueueComplete"
                >
                    <div class="dropzone-custom-content">
                        <h3 class="dropzone-custom-title">
                            Drag and drop to upload content!
                        </h3>
                        <div class="subtitle">
                            ...or click to select a file from your computer
                        </div>
                    </div>
                </Dropzone>
            </div>
            <div class="wrap emojis-main">
                <div class="dot-btn dot-primary mr-3">
                    <a
                        class="icon-btn btn-outline-primary button-effect toggle-emoji"
                        href="javascript:;"
                        ><i data-feather="smile"></i
                    ></a>
                </div>
                <div class="contact-poll">
                    <a
                        class="icon-btn btn-outline-primary mr-4 outside"
                        href="javascript:;"
                        @click.prevent="showAttachment = !showAttachment"
                        ><i class="fa fa-plus"></i
                    ></a>
                </div>
                <input
                    class="setemoj"
                    id="setemoj"
                    type="text"
                    v-model="message"
                    placeholder="Write your message..."
                    @keyup.enter="sendMessage()"
                />
                <a
                    href="javascript:;"
                    class="icon-btn btn-outline-primary button-effect mr-3 ml-3"
                    ><i data-feather="mic"></i
                ></a>
                <button
                    type="button"
                    @click.prevent="sendMessage()"
                    class="submit icon-btn btn-primary"
                    :class="{ disabled: !message }"
                    id="send-msg"
                    :disabled="!message"
                >
                    <i data-feather="send"> </i>
                </button>
                <div class="emojis-contain">
                    <div class="emojis-sub-contain custom-scroll">
                        <ul>
                            <li>&#128512;</li>
                            <li>&#128513;</li>
                            <li>&#128514;</li>
                            <li>&#128515;</li>
                            <li>&#128516;</li>
                            <li>&#128517;</li>
                            <li>&#128518;</li>
                            <li>&#128519;</li>
                            <li>&#128520;</li>
                            <li>&#128521;</li>
                            <li>&#128522;</li>
                            <li>&#128523;</li>
                            <li>&#128524;</li>
                            <li>&#128525;</li>
                            <li>&#128526;</li>
                            <li>&#128527;</li>
                            <li>&#128528;</li>
                            <li>&#128529;</li>
                            <li>&#128530;</li>
                            <li>&#128531;</li>
                            <li>&#128532;</li>
                            <li>&#128533;</li>
                            <li>&#128534;</li>
                            <li>&#128535;</li>
                            <li>&#128536;</li>
                            <li>&#128537;</li>
                            <li>&#128538;</li>
                            <li>&#128539;</li>
                            <li>&#128540;</li>
                            <li>&#128541;</li>
                            <li>&#128542;</li>
                            <li>&#128543;</li>
                            <li>&#128544;</li>
                            <li>&#128545;</li>
                            <li>&#128546;</li>
                            <li>&#128547;</li>
                            <li>&#128549;</li>
                            <li>&#128550;</li>
                            <li>&#128551;</li>
                            <li>&#128552;</li>
                            <li>&#128553;</li>
                            <li>&#128554;</li>
                            <li>&#128555;</li>
                            <li>&#128557;</li>
                            <li>&#128558;</li>
                            <li>&#128559;</li>
                            <li>&#128560;</li>
                            <li>&#128561;</li>
                            <li>&#128562;</li>
                            <li>&#128563;</li>
                            <li>&#128564;</li>
                            <li>&#128565;</li>
                            <li>&#128566;</li>
                            <li>&#128567;</li>
                            <li>&#128568;</li>
                            <li>&#128569;</li>
                            <li>&#128570;</li>
                            <li>&#128571;</li>
                            <li>&#128572;</li>
                            <li>&#128573;</li>
                            <li>&#128574;</li>
                            <li>&#128576;</li>
                            <li>&#128579;</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Avatar from "vue-avatar";
import VueRouter from "vue-router";
import moment from "moment";
import vue2Dropzone from "vue2-dropzone";
import "vue2-dropzone/dist/vue2Dropzone.min.css";

export default {
    components: {
        Avatar,
        Dropzone: vue2Dropzone,
        VueRouter
    },
    props: {
        group: {
            type: Object
        },
        user: {
            type: Object
        }
    },

    data() {
        return {
            groupData: [],
            page: 1,
            channel: null,
            messages: [],
            message: null,
            showAttachment: false,
            attachments: [],
            dzOptions: {
                url: "https://httpbin.org/post",
                thumbnailWidth: 120,
                thumbnailHeight: 120,
                autoProcessQueue: false
            }
        };
    },
    methods: {
        dzQueueComplete() {
            this.attachments = [];
            this.showAttachment = false;
        },
        dzFileAdded(file) {
            console.log(file);
            this.attachments.push(file.name);
        },
        newDate(date) {
            return moment(date).fromNow();
        },

        async sendMessage() {
            if (this.message == null || this.message == "") return;

            const { data } = await axios.post(`/api/message`, {
                message: this.message,
                group_id: this.group.id
            });
            let messageData = JSON.stringify(data);
            //console.log(data.data);
            // console.log(messageData);
            this.messages.push(data.data);

            $(".messages").animate({ scrollTop: 100000000 }, 900);
            this.message = null;

            if (this.attachments.length > 0) {
                this.$refs.dzAttachments.processQueue();
            }
        },

        async loadGroupMessages() {
            const { data } = await axios.get(
                `/group/${this.group.uuid}/messages?page${this.page}`
            );

            if (data.messages.data.length > 0) {
                $(".messages").animate({ scrollTop: 100000000 }, 900);

                this.messages = data.messages.data;
            }
        }
    },

    mounted() {
        this.loadGroupMessages();

        $(".messages").animate({ scrollTop: 100000000 }, 900);

        // this.listenForNewMessage();

        window.Echo.join(`group.${this.group.uuid}`)
            .here(users => {
                console.log(users);
            })
            .joining(user => {
                console.log(user.name);
            })
            .leaving(user => {
                console.log(user.name);
            })
            .listen(
                //  "MessageProcessed",
                // "App\\Events\\MessageProcessed",
                ".new-message",
                data => {
                    // console.log(data.message);
                    console.log(this.messages);

                    this.messages.push(data.message);

                    $(".messages").animate({ scrollTop: 100000000 }, 900);
                }
            );

        // this.groupData = this.group;
    }
    // watch: {
    //     "$route.params.group": function(group) {
    //         this.loadGroupMessages();
    //     }
    // }
};
</script>

<style>
button {
    cursor: pointer !important;
}
.contact-poll-content {
    display: none;
    z-index: 99;
}

.dropzone .dz-preview {
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin: 16px;
    min-height: 100px;
}

.dropzone .dz-preview .dz-image {
    border-radius: 20px;
    overflow: hidden;
    width: 120px;
    height: 120px;
    position: relative;
    display: block;
    z-index: 10;
}

.dropzone .dz-preview .dz-details {
    z-index: 20;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    font-size: 13px;
    min-width: 100%;
    max-width: 100%;
    padding: 2em 1em;
    text-align: center;
    color: rgba(0, 0, 0, 0.9);
    line-height: 150%;
}

.with-attachment {
    height: 325px !important;
}
#dropzone .dz-preview .dz-details,
.vue-dropzone > .dz-preview .dz-details {
    background-color: rgb(255 128 60) !important;
}
.dropzone-custom-content {
    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.dropzone-custom-title {
    margin-top: 0;
    color: #00b782;
}

.subtitle {
    color: #314b5f;
}
.with-attachment .message-attachment {
    padding-bottom: 27px;
    margin-bottom: 15px;
}
.call-list-center .animated-bg i {
    background-color: #fe9f41;
}
.no-internet.animat-rate .bg_circle > div,
.right-login.animat-rate .bg_circle > div,
.login-page2.animat-rate .bg_circle > div,
.rightchat.animat-rate .bg_circle > div {
    border: 3px solid rgba(255, 166, 71, 0.2);
}
.no-internet.animat-rate .cross1,
.right-login.animat-rate .cross1,
.login-page2.animat-rate .cross1,
.rightchat.animat-rate .cross1,
.no-internet.animat-rate .dot,
.right-login.animat-rate .dot,
.login-page2.animat-rate .dot,
.rightchat.animat-rate .dot,
.no-internet.animat-rate .cross2,
.right-login.animat-rate .cross2,
.login-page2.animat-rate .cross2,
.rightchat.animat-rate .cross2,
.no-internet.animat-rate .dot1,
.right-login.animat-rate .dot1,
.login-page2.animat-rate .dot1,
.rightchat.animat-rate .dot1,
.no-internet.animat-rate .cross2::after,
.right-login.animat-rate .cross2::after,
.login-page2.animat-rate .cross2::after,
.rightchat.animat-rate .cross2::after,
.no-internet.animat-rate .cross,
.right-login.animat-rate .cross,
.login-page2.animat-rate .cross,
.rightchat.animat-rate .cross,
.no-internet.animat-rate .cross::after,
.right-login.animat-rate .cross::after,
.login-page2.animat-rate .cross::after,
.rightchat.animat-rate .cross::after {
    background-color: rgba(255, 166, 71, 0.2);
}
</style>
